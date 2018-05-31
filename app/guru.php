<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
	protected $table='kelas';

    protected $fillable = ['nik','nama', 'jenis_kelamin','tempat_lahir','tanggal_lahir','alamat','keahlian_bidang_studi'];
    
    public $timestamps = true;

    public function absensiguru()
    {
    	return $this->belongsTo('App\absensiguru','absensiguru_id');
    }
}
