<?php

namespace App\Http\Controllers;

use App\Models\TryFree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class FreePlanController extends Controller
{
    public function create()
    {
        //https://us04web.zoom.us/j/77080107639?pwd=VXZpWUx1RnIxaVN4RlAvNjZyUHFGZz09
        //avalair sempre se esse meeting id ja existe na bd caso existir gerar outro
        $meetingId = \Str::random(32);
        $link = URL::to('/') . "/join-free-meeting/" . $meetingId;
        $data =[
            'meeting_id' => $meetingId,
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
        //falta criar FormRequest para validar

        $user =  TryFree::create([
            'title' => $request->get('title'),
            'moderator_name' => $request->get('name'),
            'meeting_id' => $request->get('meeting_id'),
            'password' => $request->get('password'),
            'attende_password' => $request->get('attendePassword'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'limit_participant' => $request->get('limitParticipants'),
            'time_limit' => $request->get('timeLimit'),
            'link' => $request->get('link'),
        ]);
        return response()->json($request->all());
    }
}
