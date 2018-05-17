<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Algorithms;
use DB;

class StudentController extends Controller
{
   public function getStudentGender(Request $request)
   {
      $learningStyle = $request->learningStyle;
      $averageGrade = $request->averageGrade;
      $campus = $request->campus;

      $userValues = array($learningStyle, $averageGrade, $campus);

      $records = DB::table('students')
         ->select('style', 'average_grade', 'campus', 'gender')
         ->get()
         ->toArray();
      
      $gender = Algorithms::euclideanDistance($userValues, $records);

      return response()->json([
         'learningStyle' => $learningStyle,
         'averageGrade' => $averageGrade,
         'campus' => $campus,
         'gender' => $gender
      ]);
   }

   public function getStudentCampus(Request $request)
   {
      $learningStyle = $request->learningStyle;
      $averageGrade = $request->averageGrade;
      $gender = $request->gender;

      $userValues = array($learningStyle, $averageGrade, $gender);

      $records = DB::table('students')
         ->select('style', 'average_grade', 'gender', 'campus')
         ->get()
         ->toArray();
      
      $campus = Algorithms::euclideanDistance($userValues, $records);

      return response()->json([
         'learningStyle' => $learningStyle,
         'averageGrade' => $averageGrade,
         'gender' => $gender,
         'campus' => $campus
      ]);
   }

   public function getStudentStyle(Request $request)
   {
      $campus = $request->campus;
      $averageGrade = $request->averageGrade;
      $gender = $request->gender;

      $userValues = array($campus, $averageGrade, $gender);

      $records = DB::table('students')
         ->select('campus', 'average_grade', 'gender', 'style')
         ->get()
         ->toArray();
      
      $learningStyle = Algorithms::euclideanDistance($userValues, $records);

      return response()->json([
         'campus' => $campus,
         'averageGrade' => $averageGrade,
         'gender' => $gender,
         'learningStyle' => $learningStyle
      ]);
   }
}
