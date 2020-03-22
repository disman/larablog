<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{

    protected $table = "table_artikel";
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(\App\Kategori::class, 'categoris_id', 'id');
    }
}
