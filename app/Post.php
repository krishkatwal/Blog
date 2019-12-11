<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table='posts';

    //Primary Key
    public $primaryKey='id';

    //Time Stamps
    public $timestamps=true;
 // User relation model
 public function user(){
     return $this->belongsTo('App\user');
 }


}