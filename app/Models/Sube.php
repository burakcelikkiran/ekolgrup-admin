<?php

namespace App\Models;

use ClassicO\NovaMediaLibrary\Core\Model as ModelNovaMediaLibrary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Sube extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;

    protected $fillable=[
        'isim','adres','telephone','email',
    ];

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];
}
