<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Setting::create([
            'site_name' => 'My Awesome Site',
            'contact_number' => '+1(234)567-890',
            'contact_email' => 'info@myawesomesite.com',
            'address' => '123 Main St, Anytown, USA',
        ]);
    }
}
