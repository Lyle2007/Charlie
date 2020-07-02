<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            StatesTableSeeder::class,
            PermissionsDemoSeeder::class,
            SupportTicketSeeder::class
        ]);
    }
}
