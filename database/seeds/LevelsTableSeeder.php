<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('levels')->truncate();
        DB::table('courses')->truncate();
        DB::table('specializations')->truncate();
        DB::table('subjects')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        DB::table('levels')->insert([
            ['title' => 'school', 'display_title' => 'School', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'iti', 'display_title' => 'ITI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'diploma', 'display_title' => 'Diploma', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'bachelors', 'display_title' => 'Bachelors / Undergraduates', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'maters', 'display_title' => 'Maters / Postgraduates', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'languages', 'display_title' => 'Languages', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'preparation_for_admission', 'display_title' => 'Preparation for Admission', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'preparation_for_job', 'display_title' => 'Preparation for Job', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'hobbies', 'display_title' => 'Hobbies', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'skill_development', 'display_title' => 'Certificate Course/Vocational Certificate Course/Skill Development', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);

        $level = DB::table('levels')->where('title','school')->first();
        if($level){
            DB::table('courses')->insert([
              ['level_id' => $level->id ,'title' => 'Play School/Creche', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
              ['level_id' => $level->id ,'title' => 'Primary(I-V)', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
              ['level_id' => $level->id ,'title' => 'Middle (VI-VII)', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
              ['level_id' => $level->id ,'title' => 'IX', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
              ['level_id' => $level->id ,'title' => 'X', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
              ['level_id' => $level->id ,'title' => 'XI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
              ['level_id' => $level->id ,'title' => 'XII', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
            ]);
        }

        $courses = DB::table('courses')->where('title','Primary(I-V)')->first();
        if($courses){
            DB::table('specializations')->insert([
                ['course_id' => $courses->id ,'title' => 'Play School/Creche', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['course_id' => $courses->id ,'title' => 'Primary(I-V)', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['course_id' => $courses->id ,'title' => 'Middle (VI-VII)', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['course_id' => $courses->id ,'title' => 'IX', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['course_id' => $courses->id ,'title' => 'X', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['course_id' => $courses->id ,'title' => 'XI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['course_id' => $courses->id ,'title' => 'XII', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
            ]);
        }

        $specialization = DB::table('specializations')->where('title','Play School/Creche')->first();
        if($specialization){
            DB::table('subjects')->insert(
                ['specialization_id' => $specialization->id, 'title' => 'All Subjects','created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
            );
        }

        $specialization1 = DB::table('specializations')->where('title','Primary(I-V)')->first();
        if($specialization){
            DB::table('subjects')->insert([
                ['specialization_id' => $specialization1->id, 'title' => 'All Subjects','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization1->id, 'title' => 'English','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization1->id, 'title' => 'Hindi','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization1->id, 'title' => 'Mathematics','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization1->id, 'title' => 'Science','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization1->id, 'title' => 'Moral Teaching','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization1->id, 'title' => 'Social Studies','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization1->id, 'title' => 'Enivornmental Education','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization1->id, 'title' => 'Environmental Studies','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization1->id, 'title' => 'Art & Craft','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization1->id, 'title' => 'Computer Science','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization1->id, 'title' => 'General Knowledge','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization1->id, 'title' => 'other','created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
            ]);
        }

        $specialization2 = DB::table('specializations')->where('title','Middle (VI-VII)')->first();
        if($specialization){
            DB::table('subjects')->insert([
                ['specialization_id' => $specialization2->id, 'title' => 'All Subjects','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'Junior Youth Empowerment Programme(JYEP)','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'English Language','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'English Literature','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'Hindi','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'Sanskrit','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'History & Civics','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'Geography','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'Mathematics','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'Physics','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'Chemistry','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'Biology','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'Computer Science','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'Art','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'General knowledge','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'SUPW','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['specialization_id' => $specialization2->id, 'title' => 'Other','created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
            ]);
        }
    }
}
