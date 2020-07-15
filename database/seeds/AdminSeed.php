<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Profile;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email' , 'amirishak0094@gmail.com')->first();
        if(! $user){
          $user= User::create(
                [
                    'name' => 'amir' ,
                    'email' => 'amirishak0094@gmail.com' ,
                    'password' => Hash::make('amir12345') ,
                    'role' => 'admin'
                ]
            ) ;

            /*Profile::create([
                $user->id
            ]);*/

            $profile = new Profile();
            $profile->user_id = $user->id;       //add profile for admin seed
            $profile->save();

        }
    }
}
