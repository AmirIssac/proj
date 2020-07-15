<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{

    protected $fillable = ['name','age','gender' ,'phone','address','image'];


    public function User(){
        return $this->belongsTo(User::class);
    }
}
