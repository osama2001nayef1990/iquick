<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\ActivityLogFactory;
use Database\Factories\PackegeservicesFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\ActivityLog::factory(10)->create();
//        ActivityLogFactory::times(10);
        \App\Models\Status::factory(5)->create();
        \App\Models\Contact::factory(1)->create();
        \App\Models\History::factory(10)->create();
        \App\Models\Package::factory(10)->create();
        \App\Models\Service::factory(10)->create();
        \App\Models\Package_services::factory(10)->create();
        \App\Models\Order::factory(10)->create();
        \App\Models\Page::factory(5)->create();
        \App\Models\Sitting::factory(1)->create();
        \App\Models\Slider::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
