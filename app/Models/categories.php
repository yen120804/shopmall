<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $filltable = [
        'name',
    ];
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id', 'id');
    }
}
