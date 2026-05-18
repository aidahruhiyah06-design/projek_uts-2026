<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactMessage::create([
            'name' => 'bunga',
            'email' => 'bunga@example.com',
            'message' => 'halo, saya tertarik dengan portofolio anda',
        ]);
    }
}
