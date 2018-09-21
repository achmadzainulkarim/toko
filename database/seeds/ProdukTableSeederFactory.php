<?php

use Illuminate\Database\Seeder;

class ProdukTableSeederFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Produk::class, 50)->create()->each(function($p){
        	$p->posix_times(oid)()->save(factory(App\Post::class)->make());
        });
    }
}
