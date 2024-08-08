<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $filltable = [
        'name',
        'price',
        'img',
        'category_id',
    ];
    protected $guarded = [];
    public function categrories(){
      return $this ->belongsTo(categories::class);
    }
     static function getAllProducts(){
        return products::orderBy('id','desc')->get();
     }
     public function scopeNew($query)
     {
         return $query->orderBy('id','desc')->limit(4);
     }
     public function scopeBestSeller($query)
     {
         return $query->where('sold','>',10)->orderBy('id','desc')->limit(4);
     }
     public function scopeView($query)
     {
         return $query->where('view','>',10)->orderBy('id','desc')->limit(4);
     }

    public function billDetails(){
        return $this->hasMany(BillDetail::class);
    }
}

