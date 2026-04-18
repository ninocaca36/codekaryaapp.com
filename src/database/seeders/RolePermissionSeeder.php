<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Buat beberapa Permission dasar
        $permissions = [
            'view dashboard',
            'manage users',
            'manage accounting',
            'manage helpdesk',
            'manage pegawai',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // 2. Buat Role dan berikan Permission
        $roles = [
            'superadmin',
            'admin',
            'accounting',
            'helpdesk',
            'pegawai',
            'creator',
            'user'
        ];

        foreach ($roles as $roleName) {
            $role = Role::firstOrCreate(['name' => $roleName]);

            // Contoh pemberian permission spesifik
            if ($roleName === 'superadmin') {
                $role->givePermissionTo(Permission::all());
            } elseif ($roleName === 'admin') {
                $role->givePermissionTo(['view dashboard', 'manage users']);
            } elseif ($roleName === 'accounting') {
                $role->givePermissionTo(['view dashboard', 'manage accounting']);
            }
        }

        // 3. Buat User Contoh untuk masing-masing Role
        $usersData = [
            [
                'name' => 'Super Admin Codekarya',
                'email' => 'superadmin@codekaryaapp.com',
                'role' => 'superadmin'
            ],
            [
                'name' => 'Admin Utama',
                'email' => 'admin@codekaryaapp.com',
                'role' => 'admin'
            ],
            [
                'name' => 'Accounting Team',
                'email' => 'accounting@codekaryaapp.com',
                'role' => 'accounting'
            ],
            [
                'name' => 'Helpdesk Support',
                'email' => 'helpdesk@codekaryaapp.com',
                'role' => 'helpdesk'
            ],
            [
                'name' => 'Pegawai Tetap',
                'email' => 'pegawai@codekaryaapp.com',
                'role' => 'pegawai'
            ],
            [
                'name' => 'User Biasa',
                'email' => 'user@codekaryaapp.com',
                'role' => 'user'
            ],
        ];

        foreach ($usersData as $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => Hash::make('password123'),
                    'email_verified_at' => now(),
                    'diamonds' => 1000,
                ]
            );

            // Pastikan user yang sudah ada juga terverifikasi dan punya diamond
            if (!$user->email_verified_at || $user->diamonds == 0) {
                $user->update([
                    'email_verified_at' => now(),
                    'diamonds' => 1000
                ]);
            }

            $user->assignRole($userData['role']);
        }
    }
}
