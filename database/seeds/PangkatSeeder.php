<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pangkat')->insert([
            [
                'nama_pangkat' => 'Juru Muda',
                'golru' => 'I/a'
            ],
            [
                'nama_pangkat' => 'Juru Muda Tk. I',
                'golru' => 'I/b'
            ],
        ]);
    }
}
