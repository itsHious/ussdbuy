<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name'=>'Admin USSSDBuy',
          'email'=>'admin@admin.com',
          'password'=>bcrypt('asdffdsa'),
          'email_verified_at'=>Carbon::now(),
        ]);
    }
}
