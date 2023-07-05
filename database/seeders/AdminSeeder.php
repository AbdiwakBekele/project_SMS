<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create([
               'full_name'=>'admin',
               'email'=>'admin15@gmail.com',
               'phone_number'=>'0918184242',
               'address'=>'AddisAbaba',
               'city'=>'yeka',
               'state'=>'BDR',
               'literacy_level'=>'degree',
               'email_verified_at' => now(),
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('admin');
    }
}
