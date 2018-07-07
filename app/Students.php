<?php
/**
 * Created by PhpStorm.
 * User: Win 10
 * Date: 6/26/2018
 * Time: 10:03 AM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class students extends Model {

   use SoftDeletes;
   // protected $primaryKey ='id';
    protected $table='students';
    protected $fillable= ['id','masv','name','class','dob','photo'];
   protected $dates = ['deleted_at'];
} 