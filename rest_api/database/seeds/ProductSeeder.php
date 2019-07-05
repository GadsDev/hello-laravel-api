<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cria 10 produtos baseado no modelo do Factory
        factory(\App\Product::class,10)->create();
    }
}
