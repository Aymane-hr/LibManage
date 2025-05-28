<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{

    use HasFactory;
    protected $guarded = ['id'];
    //======= Relationships =========//
    public function produits()
    {
        return $this->hasMany(CommandeProduit::class);
    }


    //======= Methods =========//
    public static function getTodaySalesAmount(): float
    {
        $commandes = DB::table('commandes')
            ->join('commande_produits', 'commandes.id', '=', 'commande_produits.commande_id')
            ->whereDate('commandes.created_at', Carbon::today())
            ->where('commandes.regle', 1)
            ->selectRaw('
            commande_produits.commande_id,
            commandes.remise,
            SUM(commande_produits.qte * commande_produits.prix_ht * (1 + commande_produits.tva / 100)) as total_ttc
        ')
            ->groupBy('commande_produits.commande_id', 'commandes.remise')
            ->get();

        // dd($commandes);

        $finalTotal = $commandes->reduce(function ($carry, $commande) {
            $remiseRate = floatval($commande->remise) / 100;
            $afterDiscount = $commande->total_ttc * (1 - $remiseRate);
            return $carry + $afterDiscount;
        }, 0);

        return round($finalTotal, 2);
    }



    public static function getYesterdaySalesAmount(): float
    {
        $commandes = DB::table('commandes')
            ->join('commande_produits', 'commandes.id', '=', 'commande_produits.commande_id')
            ->whereDate('commandes.created_at', Carbon::yesterday())
            ->where('commandes.regle', 1)
            ->selectRaw('
            commande_produits.commande_id,
            commandes.remise,
            SUM(commande_produits.qte * commande_produits.prix_ht * (1 + commande_produits.tva / 100)) as total_ttc
        ')
            ->groupBy('commande_produits.commande_id', 'commandes.remise')
            ->get();

        $finalTotal = $commandes->reduce(function ($carry, $commande) {
            $remiseRate = floatval($commande->remise) / 100;
            $afterDiscount = $commande->total_ttc * (1 - $remiseRate);
            return $carry + $afterDiscount;
        }, 0);

        return round($finalTotal, 2);
    }

    public static function getTodayPendingOrdersAmount(): float
    {
        $commandes = DB::table('commandes')
            ->join('commande_produits', 'commandes.id', '=', 'commande_produits.commande_id')
            // ->whereDate('commandes.created_at', Carbon::today())
            ->where('commandes.regle', 0)
            ->selectRaw('
            commande_produits.commande_id,
            commandes.remise,
            SUM(commande_produits.qte * commande_produits.prix_ht * (1 + commande_produits.tva / 100)) as total_ttc
        ')
            ->groupBy('commande_produits.commande_id', 'commandes.remise')
            ->get();

        $finalTotal = $commandes->reduce(function ($carry, $commande) {
            $remiseRate = floatval($commande->remise) / 100;
            $afterDiscount = $commande->total_ttc * (1 - $remiseRate);
            return $carry + $afterDiscount;
        }, 0);

        return round($finalTotal, 2);
    }


    public static function countTodayPendingOrders(): int
    {
        return DB::table('commandes')
            // ->whereDate('created_at', Carbon::today())
            ->where('regle', 0)
            ->count();
    }

    public static function getWeeklySalesAmount(): float
    {
        $commandes = DB::table('commandes')
            ->join('commande_produits', 'commandes.id', '=', 'commande_produits.commande_id')
            ->whereBetween('commandes.created_at', [
                Carbon::now()->startOfWeek(),
                Carbon::now()->endOfWeek()
            ])
            ->where('commandes.regle', 1)
            ->selectRaw('
            commande_produits.commande_id,
            commandes.remise,
            SUM(commande_produits.qte * commande_produits.prix_ht * (1 + commande_produits.tva / 100)) as total_ttc
        ')
            ->groupBy('commande_produits.commande_id', 'commandes.remise')
            ->get();

        $total = $commandes->reduce(function ($carry, $commande) {
            $remise = floatval($commande->remise) / 100;
            $netAmount = $commande->total_ttc * (1 - $remise);
            return $carry + $netAmount;
        }, 0);

        return round($total, 2);
    }

    public static function getLastWeekSalesAmount(): float
    {
        $commandes = DB::table('commandes')
            ->join('commande_produits', 'commandes.id', '=', 'commande_produits.commande_id')
            ->whereBetween('commandes.created_at', [
                Carbon::now()->subWeek()->startOfWeek(),
                Carbon::now()->subWeek()->endOfWeek()
            ])
            ->where('commandes.regle', 1)
            ->selectRaw('
            commande_produits.commande_id,
            commandes.remise,
            SUM(commande_produits.qte * commande_produits.prix_ht * (1 + commande_produits.tva / 100)) as total_ttc
        ')
            ->groupBy('commande_produits.commande_id', 'commandes.remise')
            ->get();

        $total = $commandes->reduce(function ($carry, $commande) {
            $remise = floatval($commande->remise) / 100;
            $netAmount = $commande->total_ttc * (1 - $remise);
            return $carry + $netAmount;
        }, 0);

        return round($total, 2);
    }

    public static function getWeeklySalesByDay(): array
    {
        $start = Carbon::now()->startOfWeek(); // Monday
        $end = Carbon::now()->endOfWeek();     // Sunday

        $results = DB::table('commandes')
            ->join('commande_produits', 'commandes.id', '=', 'commande_produits.commande_id')
            ->whereBetween('commandes.created_at', [$start, $end])
            ->where('commandes.regle', 1) // Only confirmed sales
            ->selectRaw('DATE(commandes.created_at) as date,
                     SUM(commande_produits.qte * commande_produits.prix_ht * (1 + commande_produits.tva / 100) * (1 - commandes.remise / 100)) as total_ttc')
            ->groupByRaw('DATE(commandes.created_at)')
            ->get();

        $dailyTotals = $results->pluck('total_ttc', 'date')->map(function ($total) {
            return round($total, 2);
        })->toArray();

        // Fill in missing days with 0
        $weekDays = collect([
            'Lundi',
            'Mardi',
            'Mercredi',
            'Jeudi',
            'Vendredi',
            'Samedi',
            'Dimanche'
        ]);


        $labels = [];
        $values = [];

        foreach ($weekDays as $dayName) {
            $labels[] = $dayName;

            $match = collect($dailyTotals)->filter(function ($_, $key) use ($dayName) {
                return Carbon::parse($key)->locale('fr')->dayName === strtolower($dayName);
            })->first();


            $values[] = $match ?? 0;
        }

        return ['labels' => $labels, 'values' => $values];
    }


    public static function getWeeklyQuantityChart(): array
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $quantities = DB::table('commande_produits')
            ->join('commandes', 'commande_produits.commande_id', '=', 'commandes.id')
            ->whereBetween('commandes.created_at', [$startOfWeek, $endOfWeek])
            ->where('commandes.regle', 1)
            ->selectRaw('DATE(commandes.created_at) as date, SUM(commande_produits.qte) as total_qte')
            ->groupBy(DB::raw('DATE(commandes.created_at)')) // ✅ fix here
            ->get()
            ->keyBy('date')
            ->map(fn($item) => $item->total_qte)
            ->toArray();

        $weekDays = collect([
            'lundi',
            'mardi',
            'mercredi',
            'jeudi',
            'vendredi',
            'samedi',
            'dimanche'
        ]);

        $labels = [];
        $values = [];

        foreach ($weekDays as $day) {
            $labels[] = ucfirst($day);
            $match = collect($quantities)->filter(function ($_, $key) use ($day) {
                return Carbon::parse($key)->locale('fr')->dayName === $day;
            })->first();

            $values[] = $match ?? 0;
        }

        return [
            'labels' => $labels,
            'values' => $values,
        ];
    }
    public static function getWeeklyCommandeQuantityChart(): array
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $quantities = DB::table('commandes')
            ->whereBetween('commandes.created_at', [$startOfWeek, $endOfWeek])
            ->where('commandes.regle', 1)
            ->selectRaw('DATE(commandes.created_at) as date, COUNT(commandes.id) as total_qte')
            ->groupBy(DB::raw('DATE(commandes.created_at)')) // ✅ fix here
            ->get()
            ->keyBy('date')
            ->map(fn($item) => $item->total_qte)
            ->toArray();

        $weekDays = collect([
            'lundi',
            'mardi',
            'mercredi',
            'jeudi',
            'vendredi',
            'samedi',
            'dimanche'
        ]);

        $labels = [];
        $values = [];

        foreach ($weekDays as $day) {
            $labels[] = ucfirst($day);
            $match = collect($quantities)->filter(function ($_, $key) use ($day) {
                return Carbon::parse($key)->locale('fr')->dayName === $day;
            })->first();

            $values[] = $match ?? 0;
        }

        return [
            'labels' => $labels,
            'values' => $values,
        ];
    }



}
