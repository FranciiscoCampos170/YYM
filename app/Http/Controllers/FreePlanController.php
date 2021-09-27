<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class FreePlanController extends Controller
{
    public function create()
    {
        //https://us04web.zoom.us/j/77080107639?pwd=VXZpWUx1RnIxaVN4RlAvNjZyUHFGZz09
        $meetingId = \Str::random(32);
        $link = URL::to('/') . "/join-free-meeting/" . $meetingId;
        $data =[
            'meetingId' => $meetingId,
            'password' => \Str::random(10),
            'attendePassword' => \Str::random(10),
            'meetingName' => "Reunião de teste",
            'limitParticipants' => 15,
            'timeLimit' => 45,
            'link' => $link
        ];
        return response()->json($data);
    }

    public function store(Request $request)
    {
        return response()->json($request->all());
    }
}
