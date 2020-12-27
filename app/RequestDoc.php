<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestDoc extends Model
{
    protected $guarded = [];
    protected $casts = [
        'description' => 'array'
    ];
    public function office(){
        return $this->belongsTo(Office::class);
    }
}
