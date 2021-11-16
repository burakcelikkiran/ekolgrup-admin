<?php

namespace App\Models;

use App\Casts\PagesLayout;
use ClassicO\NovaMediaLibrary\Core\Model as ModelNovaMediaLibrary;
use Illuminate\Database\Eloquent\Model;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;

class Page extends Model
{
    protected $casts = [
        'content' => PagesLayout::class,
    ];

    protected $fillable=[
        'isactive','ispublish',
    ];

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => false,
    ];

    public function galleryimage()
    {
        return $this->hasOne(ModelNovaMediaLibrary::class, 'id', 'publish_photo');
    }
}
