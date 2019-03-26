<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('merek')->get();
        $faker = Faker::create();
        foreach($users as $user){
            DB::table('barang')->insert([
                'nama_barang' => $faker->company,
                'stok' => $faker->randomNumber($nbDigits = NULL, $strict = false),
                'harga' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
                'deskripsi' => $faker->text($maxNbChars = 200),
                'id_merek' => $user->id_merek,
            ]);
        }
    }
}
