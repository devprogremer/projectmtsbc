<?php
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::Create([
        'name' => 'Developer',
        'email' => 'admin@admin.com',
        'password' => Hash::make('123456')
    ]);
    }
}
