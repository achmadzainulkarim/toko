<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert(array(
        	['nama_kategori' => 'Peralatan Kebersihan'],
        	['nama_kategori' => 'Makanan'],
        	['nama_kategori' => 'Pakaian'],
        	['nama_kategori' => 'Elektronik']
        ));
    }
}
