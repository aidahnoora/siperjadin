<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DasarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dasar_spt')->insert([
            [
                'nama_spt' => 'SK A',
                'file' => '/file_spt/sk.pdf'
            ],
        ]);
    }
}
