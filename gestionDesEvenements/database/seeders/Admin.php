<?php

namespace Database\Seeders;

use App\Models\Admin as ModelsAdmin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin= User::create([
            'name' => 'Karim',
            'email' => 'Karim@gmail.com',
            'password' => Hash::make('Karim@gmail.com'),
            'role' => 'Admin',
        ]);
        $admin = ModelsAdmin::create([
            'idUser' => $admin->id,
        ]);
    }
}
