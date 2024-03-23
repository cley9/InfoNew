<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
        
        $userAdmin = new User();
        $userAdmin->name = 'cley';
        $userAdmin->email = 'cley@gmail.com';
        $userAdmin->rol = '4';
        $userAdmin->avatar = 'storage/img/icons/person-circle.svg';
        $userAdmin->password = bcrypt('2303');
        $userAdmin->save();
        //
        $userAdmin = new User();
        $userAdmin->name = 'carlos';
        $userAdmin->email = 'carlos@gmail.com';
        $userAdmin->rol = '4';
        $userAdmin->avatar = 'storage/img/icons/person-circle.svg';
        $userAdmin->password = bcrypt('123456');
        $userAdmin->save();
        //
        $userAdmin = new User();
        $userAdmin->name = 'miguel';
        $userAdmin->email = 'miguel@gmail.com';
        $userAdmin->rol = '4';
        $userAdmin->avatar = 'storage/img/icons/person-circle.svg';
        $userAdmin->password = bcrypt('123456');
        $userAdmin->save();
        //

        $userLocal = new User();
        $userLocal->name = 'junior';
        $userLocal->email = 'junior@gmail.com';
        $userLocal->rol = '0';
        $userAdmin->avatar = 'storage/img/icons/userLogin.png';
        $userLocal->password = bcrypt('123456');
        $userLocal->save();
        //
        $userLocal = new User();
        $userLocal->name = 'mark';
        $userLocal->email = 'mark@gmail.com';
        $userLocal->rol = '0';
        $userAdmin->avatar = 'storage/img/icons/userLogin.png';
        $userLocal->password = bcrypt('123456');
        $userLocal->save();
    }
}
