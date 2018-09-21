<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $primaryKey = 'id_kategori'; 
    protected $fillable = ['nama_kategori'];//fillable utk  menentukan kolom yg dpt di isi

    public function produk(){
    	return $this->hasMany('App\Produk', 'id_kategori');
    	//memiliki hubungan dgn model produk (m-t-o)
    	//jk o-t-o gunakan hasOne
    }
}
