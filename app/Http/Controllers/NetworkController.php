<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Algorithms;
use DB;

class NetworkController extends Controller
{
   public function getNetworks(Request $request)
   {
      $reliability = $request->reliability;
      $numLinks = $request->numLinks;
      $capacity = $request->capacity;
      $cost = $request->cost;

      $userValues = array($reliability, $numLinks, $capacity, $cost);

      $records = DB::table('networks')
         ->select('reliability', 'num_links', 'capacity', 'cost', 'class')
         ->get()
         ->toArray();
      
      $network = Algorithms::euclideanDistance($userValues, $records);

      return response()->json([
         'network' => $network,
         'numLinks' => $numLinks,
         'reliability' => $reliability,
         'capacity' => $capacity,
         'cost' => $cost,
      ]);
   }
}
