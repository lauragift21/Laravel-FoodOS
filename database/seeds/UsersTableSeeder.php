<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'email' => 'gift@ck.co',
            'password' => bcrypt('secret'),
            'name' => 'Gift Egwuenu'
        ]);
    }
}
