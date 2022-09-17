<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\TD;

class TeamResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Team::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Group::make([
                Input::make('name')
                    ->title('Nom complet:')
                    ->placeholder('Entrez le nom complet')
                    ->required()
                    ->help('saisisez le nom du membre'),
                Input::make('fonction')
                    ->title('Fonction:')
                    ->placeholder('Entrez la fonction')
                    ->required()
                    ->help('saisisez la fonction du membre'),


            ]),


            Group::make([
                Input::make('facebook')
                    ->title('Lien Facebook:')
                    ->placeholder('Entrez le lien twitter')
                    ->help('saisisez le lien twitter membre'),
                Input::make('twitter')
                    ->title('Lien Twitter:')
                    ->placeholder('Entrez le lien twitter')
                    ->help('saisisez le lien twitter du membre'),


            ]),
            Group::make([
                Input::make('email')
                    ->title('Adresse Email:')
                    ->placeholder('Entrez l\'adresse mail')
                    ->help('saisisez l\'adresse mail membre'),
                Cropper::make('avatar')
                    ->title('Avatar')
                    ->width(426)
                    ->height(640)
                    ->horizontal()
                    ->required(),
            ]),
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
            TD::make('name'),
            TD::make('fonction'),
            TD::make('avatar')
            ->width('150')
                    ->render(function ($model) {
                        // Please use view('path')
                        return "<img src='{$model->avatar}'
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
