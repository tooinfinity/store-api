<?php

use App\Models\User;
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
        $user = User::create([
            'name' => 'touwfiq',
            'email' => 'touwfiq@app.com',
            'password' => Hash::make('25031992')
        ]);
    }
}
