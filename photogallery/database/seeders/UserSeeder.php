<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; // per generare stringhe fake
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Metodo per creare a mano per eventuali insert particolari
      /*   for ($i=0; $i <= 30; $i++) {
            $name = STR::random(10);
            DB::insert('insert into users (name, email, password, created_at, email_verified_at) values (?, ?, ?, ?, ?)',
            [ $name,
              $name.'@awanet.it',
              Hash::make('1q2w3e4r'),
              Carbon::now(),
              Carbon::now()  ]);

        } */

        User::factory(30)->create();


    }
}
