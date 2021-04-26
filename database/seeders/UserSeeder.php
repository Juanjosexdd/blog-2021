<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juan Jose Soto Peña',
            'email' => 'Juanjosexdd7@gmail.com',
            'password' => bcrypt('20391877')
        ])->assignRole('Admin');

        User::factory(99)->create();
    }
}
