<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profil;
use App\Models\Berita;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin1234')
        ]);

        Berita::factory(15)->create();

        Profil::create([
            'title' => 'sejarah'
        ]);
        Profil::create([
            'title' => 'visi-misi'
        ]);
        Profil::create([
            'title' => 'struktur'
        ]);
        Profil::create([
            'title' => 'manajemen'
        ]);
        Profil::create([
            'title' => 'master-plan'
        ]);
    }
}
