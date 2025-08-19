<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (config('app.env') === 'local') {
            $this->call([
                BookSeeder::class
            ]);
        }
    }
}
