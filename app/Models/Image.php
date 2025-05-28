<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Attachment\Attachable;
use Orchid\Support\Facades\Toast;
use Illuminate\Support\Facades\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Orchid\Platform\Events\UploadFileEvent;
use Orchid\Attachment\Events\AttachmentEvent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Orchid\Attachment\Models\Attachment;

class Image extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = [
        'image',
        'produit_id',
        'blog_id',
    ];

    /**
     * The attributes for the model.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the blog that owns the image.
     */
    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }

    /**
     * Get the product that owns the image.
     */
    public function produit(): BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }

    /**
     * Get the type of the image (blog or product).
     */
    public function getTypeAttribute(): string
    {
        if ($this->blog_id) {
            return 'Blog';
        } elseif ($this->produit_id) {
            return 'Product';
        }
        return 'Unknown';
    }

    /**
     * Get the related item title.
     */
    public function getRelatedTitleAttribute(): string
    {
        if ($this->blog_id && $this->blog) {
            return $this->blog->titre ?? 'Unknown Blog';
        } elseif ($this->produit_id && $this->produit) {
            return $this->produit->designation ?? 'Unknown Product';
        }
        return 'No relation';
    }

    public function getImageFromAttachment(): ?string
{
    return $this->image ? asset($this->image) : null;
}

}
