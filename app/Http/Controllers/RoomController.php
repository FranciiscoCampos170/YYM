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
        //$link = URL::to('/') . "/join-free-meeting/" . $meetingId;
        
        $data = ['mod_pw' => $mod_pw, 'part_pw' => $part_pw, 'user' => $user];
        return view('room.index')->with($data);
    }

    public function store(Request $request)
    {
        //return $request;
        //nao permitir criar salas de uma mesma pessoa com nomes iguais
        //nao permitir criar sala mais que a que ele pagou 
        $allRooms = Room::whereUserId(Auth::user()->id)->count();
        $roomAllowed = AccountInfo::whereUserId(Auth::user()->id)->first();

        if ($allRooms + 1 > $roomAllowed->total_of_rooms) {
            return redirect()->back()->with("error", "Total de sala excedida!");
        }

        foreach (Room::whereUserId(Auth::user()->id)->get() as $room ) {
            if ($room->meetingName == $request->get('meeting_name')) {
                return redirect()->back()->with("error", "Já existe uma sala com esse nome");    
            }
        }

        
        DB::transaction(function () use($request){
            //adicionar form request
            
    
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
         return redirect()->back()->with("success","Sala criada com sucesso!");
        
    }

    public function startMeeting(Request $request)
    {
        $room = Room::where('meetingID',$request->get('meetingId'))->first();
        //confirmar o tempo limite da reuniao
        $createMeeting = \Bigbluebutton::initCreateMeeting([
            'meetingID' => $request->get('meetingId'),
            'meetingName' => $room->meetingName,
            'attendeePW' => $room->attendeePW,
            'moderatorPW' => $room->moderatorPW,
        ]);
        //$createMeeting->setWelcomeMessage("Ola Mundo!");
        //$createMeeting->setRecord(true);
        //$createMeeting->setLogoutUrl( route('send-feedback', $name));
        $createMeeting->setLogo("https://ynzoyami.com/wp-content/uploads/2020/07/YNZO-LOGOTIPO-12.png");
        \Bigbluebutton::create($createMeeting);

        return redirect()->to(
            \Bigbluebutton::join([
                'meetingID' => $request->get('meetingId'),
                'userName' => Auth()->user()->name,
                'password' => $room->moderatorPW //which user role want to join set password here
            ])
        );
    }
}
