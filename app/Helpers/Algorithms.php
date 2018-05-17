<?php

namespace App\Helpers;

use App\Helpers\StaticData;

class Algorithms
{

   /**
    * Calculates the euclidean distance between two points (user values, records in DB)
    * The foreach loops through the pointQ which represents the records in DB. Every single iteration
    * the user values (pointP) are compared against pointQ.
    * @param Array $pointP user values to be compared against $pointQ
    * @param Array $pointQ records in DB
    * @return String $distance
    */
   public static function euclideanDistance($pointP, $pointQ)
   {
      $distance = NULL;
      $minValue = 1000;
      
      foreach ($pointQ as $difference) {
         $currDiffVal = array_values((array) $difference);
         $sum = 0;

         for ($i = 0; $i < count($pointP); $i++) {
            $sum += pow ( StaticData::strToValue($pointP[$i]) - StaticData::strToValue($currDiffVal[$i]), 2 );
         }
         
         $sum = sqrt($sum);

         // in order to get a more precise value, we use abs()
         if ( abs( $sum - 0 ) == 0 ) {
            $distance = last($currDiffVal);
            break;
            // return last($currDiffVal);
         } else {
            if ($minValue > $sum) {
               $minValue = $sum;
               $distance = last($currDiffVal);
            }
         } 
      }
      return $distance;
   }

   /**
    * Calculates the euclidean distance between two points (user values, records in DB)
    * @param Array $pointP user values to be compared against $pointQ
    * @param Array $pointQ records in DB
    * @return String $distance
    */
   public static function euclideanDistanceV2($pointP, $pointQ)
   {
      $distance = NULL;
      $minValue = 1000;
      
      foreach ($pointQ as $difference) {
         
         $sum = 0;
         
         for ($i = 0; $i < count($pointP); $i++) { 
            $sum += pow ( $pointP[$i] - $difference[$i], 2 );
         }

         $sum = sqrt($sum);

         if ($minValue === 0) {
            break;
         } else {
            if ($minValue > $sum) {
               $minValue = $sum;
               $distance = last($difference);
            }
         } 
      }
      return $distance;
   }

}