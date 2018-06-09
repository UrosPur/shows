<?php

use Illuminate\Database\Seeder;

class ShowsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Show::class,10)->create();
    }
}
