<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    
    protected $fillable = ['nama_jurusan'];
    public $timestamps = true;

 	public function kelas()
    {
    	return $this->hasMany('App\kelas','kelas_id');
    }

}
