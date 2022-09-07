<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

class Produk extends Model{
    public $timestamp = false;
protected $table = 'produk';

function seller(){
    return $this->belongsTo(User::class, 'id_user');
}
}