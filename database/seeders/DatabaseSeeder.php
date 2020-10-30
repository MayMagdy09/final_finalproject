<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        User::create([
            "name" => "Super Admin",
            "email" =>"sadmin@yat.com",
            "password" => Hash::make("123456789"),
            "role" =>"super admin"
        ]);
        // $this->call(ContactTypeSeeder::class);
 
        
    }
    }


