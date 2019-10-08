<?php

namespace App\Http\Controllers\Api;

use App\Comeback;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalendarController extends Controller
{

    public function getComebacks(Request $request)
    {
        $start = Carbon::parse($request->start);
        $end = Carbon::parse($request->end);
        logger("Getting comebacks between ${start} and ${end}");
        $comebacks = Comeback::where('release_date', '>', $start)
            ->where('release_date', '<', $end)
            ->get();
        info($comebacks);

        $comebacks = $comebacks->map( function($comeback, $index){
            return [
                'id' => $comeback->id,
                'title' => $comeback->artist->name,
                'start' => $comeback->release_date,
            ];
        });

        return response()->json($comebacks);
    }
}
