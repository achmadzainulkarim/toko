<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk'; 
    protected $fillable = ['nama_produk', 'harga_jual'];//fillable utk  menentukan kolom yg dpt di isi

    public function kategori(){
    	return $this->belongsTo('App\Kategori', 'id_kategori', 'id_kategori');
    	//belongTo sbgai penerima id_kategori yg d hubungkn k kolom id_kategori pada tabel produk
    }
    
}
