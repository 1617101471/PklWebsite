<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barangs';
    protected $fillable = ['nama','stok'];
    public $timestamps = true;

    public function peminjamans(){
    	return $this->hasMany('App\peminjaman');
    }
}
