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
        $this->call(DasarSeeder::class);
        $this->call(InstansiSeeder::class);
        $this->call(JabatanSeeder::class);
        $this->call(PangkatSeeder::class);
        $this->call(TujuanSeeder::class);
        $this->call(PegawaiSeeder::class);
        $this->call(BendaharaSeeder::class);
    }
}
