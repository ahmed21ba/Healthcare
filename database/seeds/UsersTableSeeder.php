<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->truncate();


        // create user
        App\User::create([
            'name'     => 'ahmed barakat',
            'username' => str_slug('ahmed'),
            'email'    => 'ahmed@gmail.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
