<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BendaharaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bendahara')->insert([
            [
                'pegawai_id' => '1'
            ],
        ]);
    }
}
