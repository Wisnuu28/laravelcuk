<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(barang::class);
        $this->call(bukutamu::class);
        $this->call(merek::class);
    }
}
