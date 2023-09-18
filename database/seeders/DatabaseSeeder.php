<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => "waiting",
            'email' => "waiting@gmail.com",
            'usertype' => "waiting",
            'phone' => "0000000000",
            'address' => "tulkarm-palestine",
            'password' =>Hash::make("123456789"),
        ]);
        \App\Models\User::factory()->create([
            'name' => "omar zablah",
            'email' => "omar@gmail.com",
            'usertype' => "admin",
            'phone' => "0598399738",
            'address' => "tulkarm-palestine",
            'password' =>Hash::make("123456789"),
        ]);
        \App\Models\User::factory()->create([
            'name' => "emp1",
            'email' => "emp1@gmail.com",
            'usertype' => "employee",
            'phone' => "0598399731",
            'address' => "tulkarm-palestine",
            'password' =>Hash::make("123456789"),
        ]);
        \App\Models\User::factory()->create([
            'name' => "emp2",
            'email' => "emp2@gmail.com",
            'usertype' => "employee",
            'phone' => "0598399732",
            'address' => "tulkarm-palestine",
            'password' =>Hash::make("123456789"),
        ]);
        \App\Models\User::factory()->create([
            'name' => "emp3",
            'email' => "emp3@gmail.com",
            'usertype' => "employee",
            'phone' => "0598399733",
            'address' => "tulkarm-palestine",
            'password' =>Hash::make("123456789"),
        ]);
        \App\Models\User::factory()->create([
            'name' => "emp4",
            'email' => "emp4@gmail.com",
            'usertype' => "employee",
            'phone' => "0598399734",
            'address' => "tulkarm-palestine",
            'password' =>Hash::make("123456789"),
        ]);
        \App\Models\User::factory()->create([
            'name' => "emp5",
            'email' => "emp5@gmail.com",
            'usertype' => "employee",
            'phone' => "0598399735",
            'address' => "tulkarm-palestine",
            'password' =>Hash::make("123456789"),
        ]);
        \App\Models\User::factory()->create([
            'name' => "alaa zablah",
            'email' => "alaa@gmail.com",
            'usertype' => "customer",
            'phone' => "0598399736",
            'address' => "tulkarm-palestine",
            'password' =>Hash::make("123456789"),
        ]);
        \App\Models\User::factory()->create([
            'name' => "mohammed zablah",
            'email' => "mohammed@gmail.com",
            'usertype' => "customer",
            'phone' => "0598399737",
            'address' => "tulkarm-palestine",
            'password' =>Hash::make("123456789"),
        ]);
        \App\Models\User::factory()->create([
            'name' => "abd zablah",
            'email' => "abd@gmail.com",
            'usertype' => "customer",
            'phone' => "0598399739",
            'address' => "tulkarm-palestine",
            'password' =>Hash::make("123456789"),
        ]);
        \App\Models\User::factory()->create([
            'name' => "ahmed ahmed",
            'email' => "ahmed@gmail.com",
            'usertype' => "customer",
            'phone' => "0598399730",
            'address' => "tulkarm-palestine",
            'password' =>Hash::make("123456789"),
        ]);
        \App\Models\User::factory()->create([
            'name' => "customer 1",
            'email' => "customer1@gmail.com",
            'usertype' => "customer",
            'phone' => "0598524464",
            'address' => "tulkarm-palestine",
            'password' =>Hash::make("123456789"),
        ]);

        \App\Models\User::factory()->create([
            'name' => "customer 2",
            'email' => "customer2@gmail.com",
            'usertype' => "customer",
            'phone' => "0599816718",
            'address' => "tulkarm-palestine",
            'password' =>Hash::make("123456789"),
        ]);
                
    }
}