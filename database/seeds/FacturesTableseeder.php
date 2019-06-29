<?php

use Illuminate\Database\Seeder;

class FacturesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Facture::class,10)->create();
    }
}
