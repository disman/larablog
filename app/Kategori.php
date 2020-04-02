<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Kategori extends Model
{
    protected $table = 'table_categoris';
    protected $guarded = ['id'];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function artikel()
    {
        return $this->hasMany(\App\Artikel::class, 'categoris_id', 'id');
    }
}
