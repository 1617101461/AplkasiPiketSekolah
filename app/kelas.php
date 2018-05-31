<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table='kelas';

    protected $fillable=['nama_kelas'];

    public $timestamps= true;

    public function jurusan()
    {
    	return $this->belongsTo('App\jurusan','jurusan_id');
    }

     public function siswa()
    {
    	return $this->hasMany('App\siswa','siswa_id');
    }
}
