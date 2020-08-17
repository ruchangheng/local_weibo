<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->times(100)->create();

        $user = User::find(1);
        $user->name = '茹长恒';
        $user->email = '624813409@qq.com';
        $user->is_admin = true;
        $user->save();
    }
}
