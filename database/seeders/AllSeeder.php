<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name' => 'admin adrian',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'fullacces' => 'yes',
            
        ]);
        $user1=User::create([
            'name' => 'usuario Valentina',
            'email' => 'valen@gmail.com',
            'password' => Hash::make('valentina'),
            'fullacces' => 'no',
            
        ]);
       

    }
}
