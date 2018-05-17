<?php

use Illuminate\Database\Seeder;

class NetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('networks')->insert([
            ['reliability' => '2',
            'num_links' => '7', 
            'capacity' => 'high',	
            'cost' => 'high',	
            'class' => 'A'],

            ['reliability' => '2',
            'num_links' => '16', 
            'capacity' => 'high',	
            'cost' => 'high',	
            'class' => 'A'],

            ['reliability' => '2',
            'num_links' => '9', 
            'capacity' => 'medium',	
            'cost' => 'high',	
            'class' => 'A'],

            ['reliability' => '2',
            'num_links' => '14', 
            'capacity' => 'medium',	
            'cost' => 'high',	
            'class' => 'A'],

            ['reliability' => '2',
            'num_links' => '11', 
            'capacity' => 'medium',	
            'cost' => 'low',	
            'class' => 'A'],

            ['reliability' => '2',
            'num_links' => '12', 
            'capacity' => 'medium',	
            'cost' => 'low',	
            'class' => 'A'],

            ['reliability' => '2',
            'num_links' => '10', 
            'capacity' => 'medium',	
            'cost' => 'medium',	
            'class' => 'A'],

            ['reliability' => '2',
            'num_links' => '13', 
            'capacity' => 'medium',	
            'cost' => 'medium',	
            'class' => 'A'],

            ['reliability' => '3',
            'num_links' => '15', 
            'capacity' => 'high',	
            'cost' => 'high',	
            'class' => 'A'],

            ['reliability' => '3',
            'num_links' => '17', 
            'capacity' => 'low',	
            'cost' => 'low',	
            'class' => 'A'],

            ['reliability' => '3',
            'num_links' => '18', 
            'capacity' => 'low',	
            'cost' => 'low',	
            'class' => 'A'],

            ['reliability' => '3',
            'num_links' => '15', 
            'capacity' => 'medium',	
            'cost' => 'high',	
            'class' => 'A'],

            ['reliability' => '3',
            'num_links' => '16', 
            'capacity' => 'medium',	
            'cost' => 'high',	
            'class' => 'A'],

            ['reliability' => '3',
            'num_links' => '11', 
            'capacity' => 'medium',	
            'cost' => 'low',	
            'class' => 'A'],

            ['reliability' => '3',
            'num_links' => '13', 
            'capacity' => 'medium',	
            'cost' => 'low',	
            'class' => 'A'],

            ['reliability' => '3',
            'num_links' => '17', 
            'capacity' => 'medium',	
            'cost' => 'medium',	
            'class' => 'A'],

            ['reliability' => '5',
            'num_links' => '19', 
            'capacity' => 'high',	
            'cost' => 'medium',	
            'class' => 'B'],

            ['reliability' => '4',
            'num_links' => '18', 
            'capacity' => 'high',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '5',
            'num_links' => '19', 
            'capacity' => 'high',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '5',
            'num_links' => '18', 
            'capacity' => 'medium',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '4',
            'num_links' => '18', 
            'capacity' => 'medium',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '4',
            'num_links' => '18', 
            'capacity' => 'medium', 
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '4',
            'num_links' => '19', 
            'capacity' => 'medium',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '4',
            'num_links' => '19', 
            'capacity' => 'high',	
            'cost' => 'medium',	
            'class' => 'B'],

            ['reliability' => '5',
            'num_links' => '18', 
            'capacity' => 'medium',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '4',
            'num_links' => '19', 
            'capacity' => 'medium',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '4',
            'num_links' => '19', 
            'capacity' => 'high',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '4',
            'num_links' => '19', 
            'capacity' => 'high',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '4',
            'num_links' => '18', 
            'capacity' => 'high',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '5',
            'num_links' => '19', 
            'capacity' => 'high',	
            'cost' => 'medium',	
            'class' => 'B'],

            ['reliability' => '4',
            'num_links' => '19', 
            'capacity' => 'high',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '4',
            'num_links' => '19', 
            'capacity' => 'medium',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '4',
            'num_links' => '17', 
            'capacity' => 'high',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '5',
            'num_links' => '20', 
            'capacity' => 'high',	
            'cost' => 'high',	
            'class' => 'B'],

            ['reliability' => '4',
            'num_links' => '18', 
            'capacity' => 'medium',	
            'cost' => 'high',	
            'class' => 'B']
        ]);
    }
}
