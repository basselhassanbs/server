<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','office_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function office(){
        return $this->belongsTo(Office::class);
    }

    public function timeline(){
        return Document::where('office_id',$this->office_id)->paginate(6);
    }
    public function requestTimeLine(){
        return RequestDoc::where('office_id',$this->office_id)->paginate(6);
    }
    public function documentstypes(){
        return DocumentsTypes::where('office_id',$this->office_id)->get();
    }
}
