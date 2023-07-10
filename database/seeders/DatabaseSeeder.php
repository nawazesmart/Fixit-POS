<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      User::updateOrcreate(
          [
              'id' => 1,

          ],
          [
              'name' => 'Fix It',
              'email'=> 'fixit@info.com',
              'password'=> Hash::make('Fix.123456789')
          ]
      );
        return response('successfully.');
    }
}
