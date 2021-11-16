<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use OwenMelbz\RadioField\RadioButton;

class SliderPublish extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = 'Yayınlama';

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        foreach ($models as $model) {
            $model->update([
                'isactive'=>$fields->isactive,
            ]);
        }
        return Action::message('Başarıyla Gerçekleştirildi');
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [
            RadioButton::make('Sayfayı Yayınla','isactive')
                ->options([
                    0 => 'Hayır',
                    1 => 'Evet',
                ])
                ->default(1)
                ->marginBetween(),
        ];
    }
}
