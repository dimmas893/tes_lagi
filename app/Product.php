<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
        protected $fillable = [
        'name', 'price', 'status_id', 'user_id'
    ];

       public function status(){
        return $this->belongsTo(Status::class, 'Status_id', 'id');
    }
}
