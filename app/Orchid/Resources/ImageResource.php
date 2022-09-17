<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\TD;

class ImageResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Image::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Group::make([
                Input::make('title')
                    ->title('Titre:')
                    ->placeholder('Entrez le titre')
                    ->required()
                    ->help('saisisez le titre de l\'image'),
                Input::make('description')
                    ->title('Description:')
                    ->placeholder('Entrez la description')
                    ->required()
                    ->help('saisisez la description de l\'image'),


            ]),
            Cropper::make('image')
                    ->title('Image')
                    ->width(640)
                    ->height(426)
                    ->horizontal()
                    ->required(),
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
            TD::make('image')
            ->width('150')
                    ->render(function ($model) {
                        // Please use view('path')
                        return "<img src='{$model->image}'
                              alt='sample'
                              class='mw-100 d-block img-fluid'>";
                    }),
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
