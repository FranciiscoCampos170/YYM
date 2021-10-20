<?php

namespace App\Http\Controllers;

use App\Models\AccountInfo;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $user = User::whereId(auth()->user()->id)
                        ->with(['account','rooms'])
                        ->firstOrFail();

        $mod_pw = "mod_pw" . auth()->id() . \Str::random(5);
        $part_pw = "part_pw" . auth()->id() . \Str::random(5);
        
        $data = ['mod_pw' => $mod_pw, 'part_pw' => $part_pw, 'user' => $user];
        return view('room.index')->with($data);
    }

    public function store(Request $request)
    {
        //return $request;
        DB::transaction(function () use($request){
            //adicionar form request
            $allRooms = Room::whereUserId(Auth::user()->id)->count();
            $roomAllowed = AccountInfo::whereUserId(Auth::user()->id)->first();
    
            $lastRoomCreated = Room::latest()->first();
            $lastRoomCreated = $lastRoomCreated == "" ? 1 : $lastRoomCreated->id + 1;
    
            $room = Room::create([
                'meetingID' => $lastRoomCreated . "-" . \Str::random(5),
                'meetingName' => $request->get('meeting_name'),
                'attendeePW' => $request->get('meeting_at_password'),
                'moderatorPW' => $request->get('meeting_md_password'),
                'user_id' => Auth::user()->id,
            ]);            
        });
            //redirecionar com um sweet alert a dizer sala criada com sucesso
         return redirect()->route('dashboard.index')->withSuccess("Sala criada com sucesso!");
        
    }
}
