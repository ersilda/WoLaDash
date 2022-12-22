<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
             // Ask for db migration refresh, default is no
             $this->command->warn('Start seeding the DB....');

             Model::unguard();
             Schema::disableForeignKeyConstraints();
     
             $this->call([
                     RolesTableSeeder::class,
                 
                 ]);
     
             Schema::enableForeignKeyConstraints();
             Model::reguard();
     
             $this->command->warn('All Database tables have been seeded.');
    }
}
