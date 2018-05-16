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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // create user
        Oasis\User::create([
            'name'     => 'OCT Admin',
            'username' => str_slug('OCT Admin'),
            'email'    => 'admin@oct.com',
            'password' => bcrypt('admin@oct')
        ]);
    }
}
