<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absensiguru extends Model
{
	protected $table='absensigurus';

    protected $fillable=['nama','keahlian_bidang_studi','keterangan'];

    public $timestamps= true;

    public function guru()
    {
    	return $this->belongsTo('App\guru','guru_id');
    }

}
