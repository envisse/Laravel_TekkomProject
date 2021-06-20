<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'control akun']);


        //role master
        $role1 = Role::create(['name' => 'master']);
        $role1->givePermissionTo('control akun');


        //role user
        $role2 = Role::create(['name' => 'user']);

        $user = User::create([
            'nip' => '00001',
            'nama_pegawai' => 'admin',
            'password' => Hash::make('admin123'),
            'tipe_admin' => 'Master'
        ]);
        $user->assignRole($role1);

        $user = User::create([
            'nip' => '00001',
            'nama_pegawai' => 'user',
            'password' => Hash::make('user123'),
            'tipe_admin' => 'User'
        ]);
        $user->assignRole($role2);
    }
}
