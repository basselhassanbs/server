<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function users(){
        return $this->hasMany(User::class);
    }
    public function documents(){
        return $this->hasMany(Document::class);
    }
    public function documentinfo()
    {
        return $this->hasMany(DocumentInfo::class);
    }
    public function requests(){
        return $this->hasMany(RequestDoc::class);
    }
}
