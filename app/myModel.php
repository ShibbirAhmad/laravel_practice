<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myModel extends Model
{
    protected $table= 'mytable';
    protected $hidden =['created_at','updated_at'];
}
