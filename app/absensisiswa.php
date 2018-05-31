<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absensisiswa extends Model
{
    protected $table='absensiswas';

    protected $fillable=['nama','tanggal','keterangan'];

    public $timestamps= true;

    public function siswa()
    {
    	return $this->belongsTo('App\siswa','siswa_id');
    }

    public function kelas()
    {
    	return $this->belongsTo('App\kelas','kelas');
    }

    public function petugaspiket()
    {
    	return $this->belongsTo('App\petugaspiket','petugaspiket');
    }

}

