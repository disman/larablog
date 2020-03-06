<?php

use Illuminate\Database\Seeder;

class CategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Kategori::class, 20)->create();
    }
}
