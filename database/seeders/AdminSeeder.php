<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('123456'),
            'utype' => 'ADM',
        ];
        User::create($data);
    }
}
