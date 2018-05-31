<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table='siswas';

    protected $fillable=['nis','nama','jenis_kelamin','tempat_lahir','tanggal_lahir','alamat'];

    public $timestamps= true;

    public function kelas()
    {
    	return $this->belongsTo('App\kelas','kelas_id');
    }
    public function absensisiswa()
    {
    	return $this->hasMany('App\absensisiswa','siswa_id');
    }
}