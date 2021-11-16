<?php

namespace App\Models;

use ClassicO\NovaMediaLibrary\Core\Model as ModelNovaMediaLibrary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Slider extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;

    protected $fillable=[
        'isactive',
    ];

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];

    public function sliderimage()
    {
        return $this->hasOne(ModelNovaMediaLibrary::class, 'id', 'image_id');
    }
}
