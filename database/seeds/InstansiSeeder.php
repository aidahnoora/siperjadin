<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instansi')->insert([
            [
                'nama_instansi' => 'Kantor Kecamatan Nawangan',
                'alamat' => 'Jl. Jenderal Sudirman No. 22',
                'logo' => '/logo/logo_kab.png',
            ],
        ]);
    }
}
