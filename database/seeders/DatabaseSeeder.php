<?php

namespace Database\Seeders;

use App\Models\Petition;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AuthorSeeder::class,
            PetitionSeeder::class]);
    }
}
