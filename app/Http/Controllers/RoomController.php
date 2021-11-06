<?php

namespace App\Http\Controllers;

use App\Models\AccountInfo;
use App\Models\Room;
use App\Models\RoomSetting;
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

    public function edit($id)
    {
        $user = User::whereId(auth()->user()->id)
        ->with(['account','rooms'])
        ->firstOrFail();

        $rooms = Room::get();

        if (!$rooms->contains('id', $id)) {
            return redirect()->route('rooms.index');
        }

        $room = Room::whereId($id)->with('setting')->firstOrFail();
        if ($room->user_id != Auth::user()->id) {
            return redirect()->back();
        }
        //return $room;
        $data = [ 'user' => $user, 'room' => $room];
        return view('room.edit')->with($data);
    }
    public function update(Request $request, $id)
    {

        try {
            //code...
        
        //tratar no form request
        //validar form
        $rooms = Room::get();

        if (!$rooms->contains('id', $id)) {
            return redirect()->route('rooms.index');
        }

        $room = Room::whereId($id)->firstOrFail();
        if ($room->user_id != Auth::user()->id) {
            return redirect()->back();
        }

        $room->meetingName = $request->get('room_name');
        $room->save();

        $setting = RoomSetting::where('room_id', $id)->firstOrFail();
        $setting->mute_user_participant = $request->get('muted_user');
        $setting->require_moderator_approval_before_joinig = $request->get('approval_before_joining');
        $setting->allow_any_user_to_start_this_meeting = $request->get('allow_start_meeting');
        $setting->all_users_join_as_moderator = $request->get('all_join_as_moderator');
        $setting->dial_number = $request->get('dial_number');
        $setting->welcome_message = $request->get('welcome_messege');
        $setting->logo = $request->get('url_logo');
        $setting->save();

            return redirect()->back()->with("success","Configurações de sala atualizadas com sucesso");
        } catch (\Exception $e) {
            //return $e;
            return redirect()->back()->with("error","Erro ao atualizar configurações da sala");
        }
        
    }
}
