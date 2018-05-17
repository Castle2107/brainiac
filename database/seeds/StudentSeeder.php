<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //gender - campus - average - ca - ec - ea - or - ca_ec - ea_or - style
        DB::table('students')->insert([
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '8.17',
            'ca' => '15',
            'ec' => '15',
            'ea' => '19',
            '_or' => '12',
            'ca_ec' => '0',
            'ea_or' => '7',
            'style' => 'ACOMODADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '6.33',
            'ca' => '16',
            'ec' => '17',
            'ea' => '18',
            '_or' => '19',
            'ca_ec' => '-1',
            'ea_or' => '-1',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.07',
            'ca' => '15',
            'ec' => '13',
            'ea' => '17',
            '_or' => '17',
            'ca_ec' => '2',
            'ea_or' => '0',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '6.6',
            'ca' => '19',
            'ec' => '13',
            'ea' => '13',
            '_or' => '20',
            'ca_ec' => '6',
            'ea_or' => '-7',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'F', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.77',
            'ca' => '19',
            'ec' => '11',
            'ea' => '14',
            '_or' => '17',
            'ca_ec' => '8',
            'ea_or' => '-3',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.87',
            'ca' => '18',
            'ec' => '12',
            'ea' => '21',
            '_or' => '14',
            'ca_ec' => '6',
            'ea_or' => '7',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'F', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.53',
            'ca' => '11',
            'ec' => '19',
            'ea' => '16',
            '_or' => '16',
            'ca_ec' => '-8',
            'ea_or' => '0',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7',
            'ca' => '19',
            'ec' => '14',
            'ea' => '19',
            '_or' => '18',
            'ca_ec' => '5',
            'ea_or' => '1',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '8',
            'ca' => '16',
            'ec' => '17',
            'ea' => '16',
            '_or' => '15',
            'ca_ec' => '-1',
            'ea_or' => '1',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.9',
            'ca' => '19',
            'ec' => '11',
            'ea' => '19',
            '_or' => '17',
            'ca_ec' => '8',
            'ea_or' => '2',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.5',
            'ca' => '19',
            'ec' => '16',
            'ea' => '13',
            '_or' => '16',
            'ca_ec' => '3',
            'ea_or' => '-3',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7',
            'ca' => '13',
            'ec' => '14',
            'ea' => '21',
            '_or' => '13',
            'ca_ec' => '-1',
            'ea_or' => '8',
            'style' => 'ACOMODADOR'],
            
            ['gender' => 'F', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.4',
            'ca' => '21',
            'ec' => '14',
            'ea' => '12',
            '_or' => '18',
            'ca_ec' => '7',
            'ea_or' => '-6',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.41',
            'ca' => '16',
            'ec' => '15',
            'ea' => '18',
            '_or' => '19',
            'ca_ec' => '1',
            'ea_or' => '-1',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'F', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.2',
            'ca' => '18',
            'ec' => '10',
            'ea' => '22',
            '_or' => '13',
            'ca_ec' => '8',
            'ea_or' => '9',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8.5',
            'ca' => '17',
            'ec' => '15',
            'ea' => '13',
            '_or' => '18',
            'ca_ec' => '2',
            'ea_or' => '-5',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'F', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.82',
            'ca' => '15',
            'ec' => '17',
            'ea' => '19',
            '_or' => '15',
            'ca_ec' => '-2',
            'ea_or' => '4',
            'style' => 'ACOMODADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.54',
            'ca' => '20',
            'ec' => '15',
            'ea' => '15',
            '_or' => '12',
            'ca_ec' => '5',
            'ea_or' => '3',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8.41',
            'ca' => '17',
            'ec' => '15',
            'ea' => '15',
            '_or' => '17',
            'ca_ec' => '2',
            'ea_or' => '-2',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8.11',
            'ca' => '12',
            'ec' => '17',
            'ea' => '12',
            '_or' => '21',
            'ca_ec' => '-5',
            'ea_or' => '-9',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'F', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.25',
            'ca' => '21',
            'ec' => '10',
            'ea' => '11',
            '_or' => '23',
            'ca_ec' => '11',
            'ea_or' => '-12',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '8.06',
            'ca' => '17',
            'ec' => '13',
            'ea' => '19',
            '_or' => '14',
            'ca_ec' => '4',
            'ea_or' => '5',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.75',
            'ca' => '11',
            'ec' => '15',
            'ea' => '20',
            '_or' => '16',
            'ca_ec' => '-4',
            'ea_or' => '4',
            'style' => 'ACOMODADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.09',
            'ca' => '13',
            'ec' => '15',
            'ea' => '22',
            '_or' => '13',
            'ca_ec' => '-2',
            'ea_or' => '9',
            'style' => 'ACOMODADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '6.14',
            'ca' => '17',
            'ec' => '13',
            'ea' => '16',
            '_or' => '15',
            'ca_ec' => '4',
            'ea_or' => '1',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.72',
            'ca' => '17',
            'ec' => '13',
            'ea' => '21',
            '_or' => '14',
            'ca_ec' => '4',
            'ea_or' => '7',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.68',
            'ca' => '15',
            'ec' => '16',
            'ea' => '13',
            '_or' => '17',
            'ca_ec' => '-1',
            'ea_or' => '-4',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'F', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.5',
            'ca' => '16',
            'ec' => '11',
            'ea' => '20',
            '_or' => '12',
            'ca_ec' => '5',
            'ea_or' => '8',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.94',
            'ca' => '14',
            'ec' => '15',
            'ea' => '15',
            '_or' => '17',
            'ca_ec' => '-1',
            'ea_or' => '-2',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.86',
            'ca' => '18',
            'ec' => '11',
            'ea' => '21',
            '_or' => '18',
            'ca_ec' => '7',
            'ea_or' => '3',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '6.62',
            'ca' => '14',
            'ec' => '11',
            'ea' => '18',
            '_or' => '15',
            'ca_ec' => '3',
            'ea_or' => '3',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8.13',
            'ca' => '16',
            'ec' => '17',
            'ea' => '14',
            '_or' => '21',
            'ca_ec' => '-1',
            'ea_or' => '-7',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'F', 
            'campus' => 'Turrialba', 
            'average_grade' => '6.88',
            'ca' => '17',
            'ec' => '13',
            'ea' => '22',
            '_or' => '11',
            'ca_ec' => '4',
            'ea_or' => '11',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'F', 
            'campus' => 'Paraiso', 
            'average_grade' => '8.5',
            'ca' => '16',
            'ec' => '15',
            'ea' => '18',
            '_or' => '15',
            'ca_ec' => '1',
            'ea_or' => '3',
            'style' => 'ACOMODADOR'],
            
            ['gender' => 'F', 
            'campus' => 'Paraiso', 
            'average_grade' => '7',
            'ca' => '19',
            'ec' => '18',
            'ea' => '20',
            '_or' => '11',
            'ca_ec' => '1',
            'ea_or' => '9',
            'style' => 'ACOMODADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.83',
            'ca' => '12',
            'ec' => '15',
            'ea' => '16',
            '_or' => '18',
            'ca_ec' => '-3',
            'ea_or' => '-2',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.13',
            'ca' => '9',	
            'ec' => '21',
            'ea' => '18',
            '_or' => '17',
            'ca_ec' => '-12',
            'ea_or' => '1',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.63',
            'ca' => '18',
            'ec' => '11',
            'ea' => '17',
            '_or' => '14',
            'ca_ec' => '7',
            'ea_or' => '3',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '8.06',
            'ca' => '10',
            'ec' => '17',
            'ea' => '17',
            '_or' => '17',
            'ca_ec' => '-7',
            'ea_or' => '0',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.72',
            'ca' => '16',
            'ec' => '14',
            'ea' => '19',
            '_or' => '14',
            'ca_ec' => '2',
            'ea_or' => '5',
            'style' => 'ACOMODADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8.63',
            'ca' => '19',
            'ec' => '12',
            'ea' => '18',
            '_or' => '15',
            'ca_ec' => '7',
            'ea_or' => '3',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'F', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.32',
            'ca' => '17',
            'ec' => '13',
            'ea' => '20',
            '_or' => '13',
            'ca_ec' => '4',
            'ea_or' => '7',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.25',
            'ca' => '17',
            'ec' => '14',
            'ea' => '16',
            '_or' => '18',
            'ca_ec' => '3',
            'ea_or' => '-2',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.72',
            'ca' => '20',
            'ec' => '13',
            'ea' => '11',
            '_or' => '19',
            'ca_ec' => '7',
            'ea_or' => '-8',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.39',
            'ca' => '10',
            'ec' => '15',
            'ea' => '16',
            '_or' => '19',
            'ca_ec' => '-5',
            'ea_or' => '-3',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.78',
            'ca' => '20',
            'ec' => '12',
            'ea' => '18',
            '_or' => '12',
            'ca_ec' => '8',
            'ea_or' => '6',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.62',
            'ca' => '19',
            'ec' => '17',
            'ea' => '15',
            '_or' => '18',
            'ca_ec' => '2',
            'ea_or' => '-3',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8',
            'ca' => '16',
            'ec' => '12',
            'ea' => '14',
            '_or' => '19',
            'ca_ec' => '4',
            'ea_or' => '-5',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8.83',
            'ca' => '17',
            'ec' => '13',
            'ea' => '16',
            '_or' => '15',
            'ca_ec' => '4',
            'ea_or' => '1',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '8.5',
            'ca' => '15',
            'ec' => '12',
            'ea' => '14',
            '_or' => '23',
            'ca_ec' => '3',
            'ea_or' => '-9',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8',
            'ca' => '11',
            'ec' => '16',
            'ea' => '17',
            '_or' => '19',
            'ca_ec' => '-5',
            'ea_or' => '-2',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8.06',
            'ca' => '17',
            'ec' => '12',
            'ea' => '21',
            '_or' => '15',
            'ca_ec' => '5',
            'ea_or' => '6',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.14',
            'ca' => '19',
            'ec' => '14',
            'ea' => '21',
            '_or' => '9',	
            'ca_ec' => '5',
            'ea_or' => '12',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.44',
            'ca' => '15',
            'ec' => '14',
            'ea' => '17',
            '_or' => '15',
            'ca_ec' => '1',
            'ea_or' => '2',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8',
            'ca' => '20',
            'ec' => '10',
            'ea' => '18',
            '_or' => '12',
            'ca_ec' => '10',
            'ea_or' => '6',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.75',
            'ca' => '14',
            'ec' => '18',
            'ea' => '13',
            '_or' => '14',
            'ca_ec' => '-4',
            'ea_or' => '-1',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.34',
            'ca' => '15',
            'ec' => '16',
            'ea' => '12',
            '_or' => '20',
            'ca_ec' => '-1',
            'ea_or' => '-8',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.33',
            'ca' => '18',
            'ec' => '14',
            'ea' => '13',
            '_or' => '17',
            'ca_ec' => '4',
            'ea_or' => '-4',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7', // fixed value
            'ca' => '18',
            'ec' => '14',
            'ea' => '17',
            '_or' => '18',
            'ca_ec' => '4',
            'ea_or' => '-1',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.84',
            'ca' => '17',
            'ec' => '14',
            'ea' => '12',
            '_or' => '18',
            'ca_ec' => '3',
            'ea_or' => '-6',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '8.29',
            'ca' => '19',
            'ec' => '8',	
            'ea' => '12',
            '_or' => '21',
            'ca_ec' => '11',
            'ea_or' => '-9',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '8.79',
            'ca' => '20',
            'ec' => '15',
            'ea' => '15',
            '_or' => '15',
            'ca_ec' => '5',
            'ea_or' => '0',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.5',
            'ca' => '7',	
            'ec' => '19',
            'ea' => '19',
            '_or' => '15',
            'ca_ec' => '-12',
            'ea_or' => '4',
            'style' => 'ACOMODADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8.39',
            'ca' => '19',
            'ec' => '11',
            'ea' => '21',
            '_or' => '12',
            'ca_ec' => '8',
            'ea_or' => '9',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7.43',
            'ca' => '21',
            'ec' => '10',
            'ea' => '20',
            '_or' => '10',
            'ca_ec' => '11',
            'ea_or' => '10',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '8.43',
            'ca' => '14',
            'ec' => '9',	
            'ea' => '24',
            '_or' => '14',
            'ca_ec' => '5',
            'ea_or' => '10',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.8',
            'ca' => '17',
            'ec' => '14',
            'ea' => '18',
            '_or' => '14',
            'ca_ec' => '3',
            'ea_or' => '4',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.2',
            'ca' => '12',
            'ec' => '15',
            'ea' => '18',
            '_or' => '14',
            'ca_ec' => '-3',
            'ea_or' => '4',
            'style' => 'ACOMODADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.3',
            'ca' => '17',
            'ec' => '13',
            'ea' => '17',
            '_or' => '16',
            'ca_ec' => '4',
            'ea_or' => '1',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'F', 
            'campus' => 'Paraiso', 
            'average_grade' => '9',
            'ca' => '17',
            'ec' => '11',
            'ea' => '18',
            '_or' => '18',
            'ca_ec' => '6',
            'ea_or' => '0',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '6.57',
            'ca' => '14',
            'ec' => '14',
            'ea' => '20',
            '_or' => '13',
            'ca_ec' => '0',
            'ea_or' => '7',
            'style' => 'ACOMODADOR'],
            
            ['gender' => 'F', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.63',
            'ca' => '14',
            'ec' => '16',
            'ea' => '20',
            '_or' => '13',
            'ca_ec' => '-2',
            'ea_or' => '7',
            'style' => 'ACOMODADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8.83',
            'ca' => '17',
            'ec' => '13',
            'ea' => '20',
            '_or' => '16',
            'ca_ec' => '4',
            'ea_or' => '4',
            'style' => 'CONVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '7.69',
            'ca' => '13',
            'ec' => '14',
            'ea' => '16',
            '_or' => '15',
            'ca_ec' => '-1',
            'ea_or' => '1',
            'style' => 'DIVERGENTE'],
            
            ['gender' => 'M', 
            'campus' => 'Paraiso', 
            'average_grade' => '7',
            'ca' => '18',
            'ec' => '12',
            'ea' => '17',
            '_or' => '16',
            'ca_ec' => '6',
            'ea_or' => '1',
            'style' => 'ASIMILADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8.23',
            'ca' => '14',
            'ec' => '16',
            'ea' => '19',
            '_or' => '15',
            'ca_ec' => '-2',
            'ea_or' => '4',
            'style' => 'ACOMODADOR'],
            
            ['gender' => 'M', 
            'campus' => 'Turrialba', 
            'average_grade' => '8.64',
            'ca' => '11',
            'ec' => '15',
            'ea' => '18',
            '_or' => '14',
            'ca_ec' => '-4',
            'ea_or' => '4',
            'style' => 'ACOMODADOR']
        ]);
    }
}
