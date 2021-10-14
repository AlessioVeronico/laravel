<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['alessio', 'alessio@alessio.com', 'alessioalessio'],
            ['alice', 'alice@alice.com', 'alicealicealice'],
            ['ciao', 'ciao@ciao.com', 'ciaocomestai'],
            ['antonino', 'birichino@birico.com','antonino79']
        ];

        foreach($users as $user) {
            User::create([
                'name' => $user[0],
                'email' => $user[1],
                'password' => Hash::make($user[2])
            ]);
        }
        
    }
}
