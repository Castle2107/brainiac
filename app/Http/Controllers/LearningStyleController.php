<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Algorithms;
use DB;

class LearningStyleController extends Controller
{
   public function getLearningStyle(Request $request)
   {
      $ca = $request->ca;
      $ec = $request->ec;
      $ea = $request->ea;
      $or = $request->or;

      $CAEC = $ca - $ec;
      $EAOR = $ea - $or;

      $userValues = array($ca, $ec, $ea, $or);

      $records = DB::table('learning_styles')
         ->select('ca', 'ec', 'ea', '_or', 'style')
         ->get()
         ->toArray();

      $learningStyle = Algorithms::euclideanDistance($userValues, $records);
            
      return response()->json([
         'learningStyle' => $learningStyle,
         'ca_ec' => $CAEC,
         'ea_or' => $EAOR,
      ]);
   }

   // public function test()
   // {
   //    $records = DB::table('learning_styles')->select('ca', 'ea', 'ec', '_or', 'style')->get();
   //    $records = $this->toArrayValues($records->toArray());
   //    dump($records);
   // }

   // private function toArrayValues($array)
   // {
   //    $arrayWithValues = array();
   //    foreach ($array as $value) {
   //       $current = array_values((array) $value);
         
   //       for ($i=0; $i < count($current) - 1; $i++) { 
   //          $current[$i] = $this->strToValue($current[$i]);
   //       }
   //       array_push($arrayWithValues, $current);
   //    }
   //    return $arrayWithValues;
   // }


}
