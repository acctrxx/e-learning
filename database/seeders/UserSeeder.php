<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Petra Sihombing',
            'email' => 'petra@gmail.com',
            'password' => '1234',
            'role' => 'USER',
            'image' => 'kosong'
        ]);
        User::create([
            'name' => 'Petra Sihombeng',
            'email' => 'peta@gmail.com',
            'password' => '1234',
            'role' => 'USER',
            'image' => 'kosong'
        ]);
    }
}
