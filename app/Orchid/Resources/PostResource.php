<?php

namespace App\Orchid\Resources;

use Illuminate\Support\Facades\Auth;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\TD;

class PostResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Post::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('user_id')
                    ->value(Auth::user()->id),
            Group::make([
                Input::make('title')
                    ->title('Titre:')
                    ->placeholder('Entrez le titre')
                    ->required()
                    ->help('saisisez le titre de l\'image'),
                Cropper::make('image')
                    ->title('Image')
                    ->width(500)
                    ->height(300)
                    ->horizontal()
                    ->required(),
            ]),
            Quill::make('content')
                ->title('contenu')
                ->popover('Quill is a free, open source WYSIWYG editor built for the modern web.'),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('title'),
            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
