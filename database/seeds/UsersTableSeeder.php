<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::truncate();
            DB::table('role_user')->truncate();

            $adminRole1  = Role::where('urole','admin')->first();
            $adminRole2  = Role::where('urole','admin')->first();
            $adminRole3  = Role::where('urole','admin')->first();


            $admin1 = User::create([
                'name'          => 'Ben',
                'urole'         => 'admin',
                'email'         => 'ben@pianonation.com',
                'password'      => Hash::make('ben@pianonation.com'),
            ]);

            $admin2 = User::create([
                'name'          => 'Renee',
                'urole'         => 'admin',
                'email'         => 'renee@pianonation.com',
                'password'      => Hash::make('renee@pianonation.com'),
            ]);

            $admin3 = User::create([
                'name'          => 'Rtood',
                'urole'         => 'admin',
                'email'         => 'rtood@pianonation.com',
                'password'      => Hash::make('rtood@pianonation.com'),
            ]);




            // $superadmin->roles()->attach($superadminRole);
            $admin1     ->roles()->attach($adminRole1);
            $admin2     ->roles()->attach($adminRole2);
            $admin3     ->roles()->attach($adminRole3);
            // $author    ->roles()->attach($authorRole);
            // $user      ->roles()->attach($userRole);

    }
}
