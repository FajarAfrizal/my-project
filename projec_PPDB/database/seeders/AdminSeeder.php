<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin',
            'nisn' => '12108415',
            'kelamin' => 'laki-laki',
            'email' => 'fajar@admin.com',
            'password'=> bcrypt('12108415'),
            'asal_sekolah' => 'wikrama',
            'no_hp' => '02212121',
            'no_hp_ayah' => '12151512',
            'no_hp_ibu' => '4513121151',
        ]);
    }
}
