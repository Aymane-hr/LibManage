<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Image;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition(): array
    {
        $openLibraryIds = [
            'OL7353617M',
            'OL26436120M',
            'OL8199642M',
            'OL24372608M',
            'OL24213342M',
            'OL26412373M',
            'OL25433996M',
            'OL23320245M',
            'OL32308475M',
            'OL27297804M',
            'OL27494861M',
            'OL27669465M',
            'OL29416611M',
            'OL26836529M',
            'OL25441439M',
            'OL26342422M',
            'OL32041750M',
            'OL27664552M',
            'OL32218298M',
            'OL26354141M',
            'OL25443180M',
            'OL27481276M',
            'OL32572266M',
            'OL32928203M',
            'OL29123456M',
            'OL22461552M',
            'OL21522955M',
            'OL7343617M',
            'OL16920635M',
            'OL32104770M',
            'OL26467421M',
            'OL32093817M',
            'OL32473515M',
            'OL26457919M',
            'OL31644162M',
            'OL32742639M',
            'OL32878214M',
            'OL25452391M',
            'OL32739578M',
            'OL28926650M',
            'OL27378391M',
            'OL28139831M',
            'OL27382213M',
            'OL26458362M',
            'OL23278018M',
            'OL34382956M',
            'OL27613344M',
            'OL27369077M',
            'OL34396461M',
            'OL30941049M',
            'OL27663876M',
            'OL27022504M',
            'OL28436779M',
            'OL31396353M',
            'OL26964591M',
            'OL26411684M',
            'OL27282866M',
            'OL26466589M',
            'OL30696165M',
            'OL28478432M',
            'OL27084476M',
            'OL31870734M',
            'OL31205224M',
            'OL28381749M',
            'OL31001186M',
            'OL29345601M',
            'OL28133796M',
            'OL28516761M',
            'OL27277162M',
            'OL32154631M',
            'OL32294515M',
            'OL26468636M',
            'OL27682720M',
            'OL28511440M',
            'OL29372678M',
            'OL28172143M',
            'OL31408186M',
            'OL26515891M',
            'OL27714564M',
            'OL26473744M',
            'OL32437872M',
            'OL28941984M',
            'OL27494975M',
            'OL32877866M',
            'OL30658283M',
            'OL30583864M',
            'OL28476481M',
            'OL26943494M',
            'OL29054095M',
            'OL31154580M',
            'OL28679871M',
            'OL26468725M',
            'OL31418689M',
            'OL27029291M',
            'OL28364294M',
            'OL32687733M',
            'OL26949740M',
            'OL28989626M',
            'OL27751636M',
            'OL26755817M',
            'OL29393154M',
            'OL32369430M',
            'OL28514748M',
            'OL26524145M',
            'OL27677210M'
        ];
        $image = 'https://covers.openlibrary.org/b/olid/' . $openLibraryIds[array_rand($openLibraryIds)] . '-L.jpg';

        return [
            // Using Picsum for realistic, random images
            'image' =>  $image,



            // Or use Unsplash with keyword "product"
            // 'image' => 'https://source.unsplash.com/320x240/?product',

            'produit_id' => \App\Models\Produit::factory(),
            'blog_id' => \App\Models\Blog::factory(),
        ];
    }
}
