<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'      =>  'Root',
            'email'     =>  'root@root.com',
            'password'  =>  bcrypt('123.abc*'),
            'email_verified_at' => now()
        ])->assignRole('root');

        Profile::create([
            'user_id' => $user->id,
            'cpf' => '000.000.000-00',
        ]);

        $user1 = User::create([
            'name'      =>  'SuperAdmin',
            'email'     =>  'superadmin@admin.com',
            'password'  =>  bcrypt('123.abc*'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        Profile::create([
            'user_id' => $user1->id,
            'cpf' => '111.111.111-11',
        ]);

        $user2 = User::create([
            'name'      =>  'Admin',
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('123.abc*'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        Profile::create([
            'user_id' => $user2->id,
            'cpf' => '222.222.222-22',
        ]);
    }
}
