<?php

namespace Database\Seeders;

use App\Models\Oglas;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(1)->create();

         $user = User::factory()->create([
            'name'=>'Danko',
            'email'=>'danko@gmail.com',
            'password'=> '123456'
         ]);
        
         Oglas::factory(6)->create([
            'user_id'=> $user->id
        ]);
    }
}
