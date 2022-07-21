<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tujuan_perjalanan')->insert([
            [
                'nama_tujuan' => 'Desa Gondang',
                'nama_pejabat' => 'Drs. Suhardi'
            ],
        ]);
    }
}
