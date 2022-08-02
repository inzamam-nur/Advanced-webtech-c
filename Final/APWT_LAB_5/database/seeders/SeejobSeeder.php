<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeejobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\seejob::factory()->create([
            
            'location' => 'Mohammodpur,Tajmoholroad',
            'subjects' => 'all',
            'day_per_week' => '5days',
            's_gender' => 'male',
            't_gender' => 'male',
            'salary' => '5000',
        
        
        
        
            'location' => 'Shymoly,ringroad',
            'subjects' => 'accounting,math',
            'day_per_week' => '5days',
            's_gender' => 'male',
            't_gender' => 'Male/Female',
            'salary' => '10000',
        
            
            'location' => 'Adabor,Ringroad',
            'subjects' => 'Science',
            'day_per_week' => '4days',
            's_gender' => 'female',
            't_gender' => 'both',
            'salary' => '3000',
            
            'location' => 'Bashundhara,#C-block',
            'subjects' => 'All',
            'day_per_week' => '4days',
            's_gender' => 'Male',
            't_gender' => 'Male',
            'salary' => '12000',
    ]);
    }
    
}
