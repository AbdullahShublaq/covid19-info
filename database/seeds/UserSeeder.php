<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = \App\User::create([
            'name'      => 'Admin',
            'email'     => 'admin@app.com',
            'password'  => bcrypt(123456)
        ]);

    }
}
