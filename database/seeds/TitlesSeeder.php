<?php

use Illuminate\Database\Seeder;
use App\Title;

class TitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Title::create([
            'name' => 'Direktur',
        ]);

        Title::create([
            'name' => 'General Manager',
        ]);

        Title::create([
            'name' => 'Manager',
        ]);

        Title::create([
            'name' => 'Supervisor',
        ]);

        Title::create([
            'name' => 'Staff',
        ]);

    }
}
