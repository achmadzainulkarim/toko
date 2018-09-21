<?php

use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert(array(
        	['id_kategori'=>'1','nama_produk' => 'sabun', 'harga_jual' => '2000'],
        	['id_kategori'=>'1','nama_produk' => 'sampo', 'harga_jual' => '5000'],
        	['id_kategori'=>'1','nama_produk' => 'sikat gigi', 'harga_jual' => '1000'],
        	['id_kategori'=>'2','nama_produk' => 'tempe', 'harga_jual' => '4000'],
        	['id_kategori'=>'2','nama_produk' => 'tahu', 'harga_jual' => '3000'],
        	['id_kategori'=>'2','nama_produk' => 'mie', 'harga_jual' => '6000'],
        	['id_kategori'=>'2','nama_produk' => 'oreo', 'harga_jual' => '8000'],
        	['id_kategori'=>'3','nama_produk' => 'cd', 'harga_jual' => '9000'],
        	['id_kategori'=>'3','nama_produk' => 'kemeja', 'harga_jual' => '1000'],
        	['id_kategori'=>'3','nama_produk' => 'jaket', 'harga_jual' => '2000'],
        	['id_kategori'=>'4','nama_produk' => 'hp', 'harga_jual' => '3000'],
        	['id_kategori'=>'4','nama_produk' => 'fd', 'harga_jual' => '4000'],
        	['id_kategori'=>'4','nama_produk' => 'laptop', 'harga_jual' => '5000'],
        	['id_kategori'=>'1','nama_produk' => 'sikat', 'harga_jual' => '7000'],
        	['id_kategori'=>'2','nama_produk' => 'biskuit', 'harga_jual' => '2000'],
        ));
    }
}
