<?php

use Illuminate\Database\Seeder;

class CoalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call('CoalTypeSeeder');

        $this->command->info('User table seeded!');
    }
}
