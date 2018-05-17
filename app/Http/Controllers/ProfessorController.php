<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Algorithms;
use DB;

class ProfessorController extends Controller
{
   public function getProfessorType(Request $request)
   {
      $age = $request->age;
      $gender = $request->gender;
      $selfEval = $request->selfEval;
      $teachingPeriod = $request->teachingPeriod;
      $computerSkill = $request->computerSkill;
      $expertiseArea = $request->expertiseArea;
      $webBasedTechExp = $request->webBasedTechExp;
      $websiteExperience = $request->websiteExperience;

      $userValues = array(
         $age, $gender, 
         $selfEval, $teachingPeriod, 
         $expertiseArea, $computerSkill, 
         $webBasedTechExp, $websiteExperience
      );

      $records = DB::table('professor_type')
         ->select('age', 'gender', 'self_eval', 'teacher_period', 'expertise_area', 
                  'computer_skill', 'web_based_tech_experience', 'website_experience', 'class')
         ->get()
         ->toArray();
      
      $professorType = Algorithms::euclideanDistance($userValues, $records);

      return response()->json([
         'age' => $age,
         'gender' => $gender,
         'selfEval' => $selfEval,
         'teachingPeriod' => $teachingPeriod,
         'computerSkill' => $computerSkill,
         'expertiseArea' => $expertiseArea,
         'webBasedTechExp' => $webBasedTechExp,
         'websiteExperience' => $websiteExperience,
         'professorType' => $professorType
      ]);
   }
}
