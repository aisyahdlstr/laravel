<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dosen::insert([
        //     'nama_dosen'=>Str::random(10),
        // ]);

        Dosen::factory(10)->create();
    }
}
