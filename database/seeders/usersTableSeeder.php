<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       $user = User::Create([
            'name' => 'root',
            'email' => 'root@gmail.com',
            'password' => Hash::make('password'),
            'admin' => Hash::make('root@gmail.com'.date('d,m,y'))
        ]);

        Profile::create([
            'user_id' => $user->id,
            'avater' => '/Uploads/avaters/profile.jpg',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur praesentium repellat ut animi illum mollitia assumenda? Voluptatem vero non tempora voluptas enim amet id, impedit, nihil ipsam deleniti modi quis?',
            'facebook' => 'bacebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
