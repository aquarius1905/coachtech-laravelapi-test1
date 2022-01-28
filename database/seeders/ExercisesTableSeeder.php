<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'name1',
            'email' => 'name1@sample.com',
            'profile' => 'profile1'
        ];
        $exercise = new Exercise;
        $exercise->fill($param)->save();
        $param = [
            'name' => 'name2',
            'email' => 'name2@sample.com',
            'profile' => 'profile2'
        ];
        $exercise = new Exercise;
        $exercise->fill($param)->save();
        $param = [
            'name' => 'name3',
            'email' => 'name3@sample.com',
            'profile' => 'profile3'
        ];
        $exercise = new Exercise;
        $exercise->fill($param)->save();
    }
}
