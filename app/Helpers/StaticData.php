<?php

namespace App\Helpers;

class StaticData
{

   public static function strToValue($str)
   {
      switch ($str) {
         case 'high':
            return 3;
         case 'medium':
            return 2;
         case 'low':
            return 1;
         
         // gender
         case 'F':
            return 3;
         case 'M':
            return 2;
         case 'NA':
            return 1;
         
         // self evaluation
         case 'A': //advanced
            return 3;
         case 'I': //intermediate
            return 2;
         case 'B': //beginner
            return 1;
         
         
         // expertise area
         case 'ND': //network design
            return 3;
         case 'DM': //decision making
            return 2;
         case 'OT': //other
            return 1;
         
         // computer skill
         case 'H': //high
            return 3;
         case 'A': //average
            return 2;
         case 'L': //low
            return 1;

         // web based tech experience && website experience
         case 'O': //often
            return 3;
         case 'S': //sometimes
            return 2;
         case 'N': //never
            return 1;
         
         // learning style
         case 'ASIMILADOR':
            return 4;
          case 'ACOMODADOR':
            return 3; 
          case 'DIVERGENTE':
            return 2;
          case 'CONVERGENTE':
            return 1;

         default:
            return floatval($str);
      }
   }

}