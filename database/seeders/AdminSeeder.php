<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $data=[
            'first_name'=>'Admin',
            'last_name'=>'Pati',
            'email'=>'admin2@gmail.com',
            'password'=>bcrypt('admin'),
            'status'=>1,
            'dob'=>'1996-02-17'
        ];
        Admin::create($data);
    }
}
