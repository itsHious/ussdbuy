<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NumberList;

class NumberStatus extends Controller
{
    public function index(Request $r){
      $number=$r->number;
        $num = NumberList::where('number',$number)->first();
        if ($num !==null) {

          $num->update([
            'no_req'=>$num->no_req+1,
          ]);

          return response()->json([
        'number'=>$number,
        'status_code' => 1,
        'message'=>$num->option == 'Blacklist'?'blocked':'active',
      ]);
        }else {
          return response()->json([

        'message'=>'Number not found'
      ]);
        }

    }
}
