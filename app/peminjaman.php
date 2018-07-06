<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $fillable = ['id_user','id_barang','pengembalian'];
    protected $cast = ['pengembalian' => 'boolean',];

    public function barang(){
    	return $this->belongsTo('App\barang');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
