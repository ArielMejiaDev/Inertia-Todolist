<?php

use App\Profile;
use App\User;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(User::class)->create([
            'name' => 'Ariel',
            'email' => 'arielmejiadev@gmail.com',
            'password' => bcrypt(12345678),
        ]);

        factory(Profile::class)->create([
            'user_id' => $user->id,
        ]);
    }
}
