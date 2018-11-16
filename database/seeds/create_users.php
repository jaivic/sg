<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class create_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = \App\User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('secret')
        ]);

        $adminUser->save();

        $basicUser = \App\User::create([
            'name' => 'user',
            'email' => 'user@mail.com',
            'password' => Hash::make('secret')
        ]);
        $basicUser->save();
        $developer = \App\User::create([
            'name' => 'developer',
            'email' => 'developer@mail.com',
            'password' => Hash::make('secret')
        ]);
        $developer->save();
        $role = Role::where('name', 'admin')->get();
        if ($role) $adminUser->attachRole($role[0]->id);

        $roleUser = Role::where('name', 'user')->get();
        if ($roleUser) $basicUser->attachRole($roleUser[0]->id);
        $roleUser = Role::where('name', 'developer')->get();
        if ($roleUser) $developer->attachRole($roleUser[0]->id);


    }
}
