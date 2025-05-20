<?php

namespace App\Orchid\Screens\Blog;

use App\Models\Blog;
use Orchid\Screen\TD;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;

class BlogListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $blogs = Blog::paginate(10);
        return ['blogs' => $blogs];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Blogs';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Nouveau'))
                ->icon('bs.plus-circle')
                ->href(route('platform.blog.edit')),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('blogs', [
                TD::make('titre', __('Titre'))
                ->sort()
                ->cantHide(),
                // ->filter(Input::make())
                // ->render(fn (User $user) => new Persona($user->presenter())),
                TD::make('contenu', __('Contenu'))
                ->sort()
                ->cantHide()
                // ->filter(Input::make())
                // ->render(fn (User $user) => new Persona($user->presenter())),
            ])
        ];
    }
}
