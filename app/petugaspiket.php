<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugaspiket extends Model
{
    protected $table='petugaspikets';

    protected $fillable = ['nama_petugas', 'hari','tanggal'];
    
    public $timestamps = true;

     public function absensisiswa()
    {
    	return $this->hasMany('App\absensisiswa','petugaspiket_id');
    }
}
