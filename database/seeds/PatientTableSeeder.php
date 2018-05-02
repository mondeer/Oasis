<?php

use Illuminate\Database\Seeder;

class PatientTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = ([
            [
                'name'     => 'Laban',
                'username' => 'mondia',
                'address'  => '3401',
                'phone'    => '+254724871111',
                'age'      => '22',
                'gender'   => 'Male'
            ], [
                'name'     => 'Ken',
                'username' => 'ken',
                'address'  => 'eldoret',
                'phone'    => '986833034',
                'age'      => '28',
                'gender'   => 'Male'
            ], [
                'name'     => 'Clare',
                'username' => 'cheb',
                'address'  => 'Nairobi',
                'phone'    => '982329923',
                'age'      => '30',
                'gender'   => 'Female'
            ]
        ]);

        App\patient::insert($patient);
    }
}
