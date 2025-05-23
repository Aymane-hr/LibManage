<?php

namespace App\Orchid\Screens;

use App\Models\Image;
use Orchid\Screen\TD;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Toast;
use Orchid\Support\Facades\Layout;

class ImageScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     */
    public function query(): iterable
    {
        return [
            'images' => Image::with(['blog', 'produit'])
                ->orderBy('created_at', 'desc')
                ->paginate(15),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Images';
    }

    /**
     * The description displayed under the name.
     */
    public function description(): ?string
    {
        return 'Manage all images for blogs and products';
    }

    /**
     * The screen's action buttons.
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Créer Image')
                ->icon('plus')
                ->route('platform.images.create'),
        ];
    }

      public function remove(Request $request): void
    {
        Image::findOrFail($request->get('id'))->delete();

        Toast::info(__('Image was removed'));
    }

    /**
     * The screen's layout elements.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('images', [
                TD::make('id', 'ID')
                    ->sort()
                    ->cantHide(),

                TD::make('image', 'Image')
                    ->render(function (Image $image) {
                        if ($image->attachment->first()) {
                            $attachment = $image->attachment->first();
                            return "<img src='{$attachment->url()}' alt='Image' style='width: 60px; height: 60px; object-fit: cover; border-radius: 4px;'>";
                        }
                        return '<span class="text-muted">No image</span>';
                    }),

                TD::make('type', 'Type')
                    ->render(function (Image $image) {
                        $type = $image->type;
                        $class = $type === 'Blog' ? 'bg-info' : 'bg-success';
                        return "<span class='badge {$class}'>{$type}</span>";
                    })
                    ->sort(),

                TD::make('related_title', 'Related Item')
                    ->render(function (Image $image) {
                        return $image->related_title;
                    })
                    ->sort(),

                TD::make('created_at', 'Created')
                    ->render(function (Image $image) {
                        return $image->created_at->format('M d, Y H:i');
                    })
                    ->sort(),

                TD::make('actions', 'Actions')
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Image $image) {
                        return Group::make([
                            Link::make('Edit')
                                ->route('platform.images.edit', $image->id)
                                ->icon('pencil')
                                ->class('btn btn-sm btn-outline-primary'),

                            Button::make('Delete')
                                ->icon('bs.trash3')
                                ->confirm('Once the image is deleted, all of its resources and data will be permanently deleted.')
                                ->method('remove', [
                                    'id' => $image->id,
                                ])
                        ]);
                    })
            ]),
        ];
    }
}
