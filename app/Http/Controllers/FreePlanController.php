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
        return view('plans.free')->with($data);
        //return response()->json($data);
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
        return $this->startFreeMeeting($user->moderator_name, $user->meeting_id, $user->title, $user->password, $user->attende_password, $user->limit_participant, $user->time_limit);
    }
    public function startFreeMeeting($name, $meetingId, $meetingName, $password, $attendePassword, $limitParticipant, $timeLimit)
    {
        //confirmar o tempo limite da reuniao
        $createMeeting = \Bigbluebutton::initCreateMeeting([
            'meetingID' => $meetingId,
            'meetingName' => $meetingName,
            'attendeePW' => $attendePassword,
            'moderatorPW' => $password,
        ]);
        $createMeeting->setDuration($timeLimit); //define o tempo limite da reuniao
        $createMeeting->setMaxParticipants($limitParticipant); //define o numero maximo de participantes para essa reuniao
        //$createMeeting->setWelcomeMessage("Ola Mundo!");
        //$createMeeting->setRecord(true);
        //$createMeeting->setLogoutUrl( route('send-feedback', $name));
        $createMeeting->setLogo("https://ynzoyami.com/wp-content/uploads/2020/07/YNZO-LOGOTIPO-12.png");
        \Bigbluebutton::create($createMeeting);

        return redirect()->to(
            \Bigbluebutton::join([
                'meetingID' => $meetingId,
                'userName' => $name,
                'password' => $password //which user role want to join set password here
            ])
        );
    }

    public function joinFreeMeeting($meetingId)
    {
        //return view('plans.join-free-meeting');

        $isMeetingRunnig = \Bigbluebutton::isMeetingRunning([
            'meetingID' => $meetingId,
        ]);

        if (!$isMeetingRunnig) {
            //$meeting = TryFree::where('meeting_id', $meetingId)->firstOrFail();
            $data = [
                'meetingID' => $meetingId,
                //'userName' => $meeting->meeting_name,
                //'password' =>$meeting->attende_password,
            ];
           // return view('meeting-not-started-for-free')->with($data);
        }
        $meetingInfo = TryFree::where('meeting_id', $meetingId)->firstOrFail();
        $meetingName = $meetingInfo->title;
        $meetingId = $meetingInfo->meeting_id;
        $meetingOwer = $meetingInfo->moderator_name;
        $meetingPassword = $meetingInfo->attende_password;
        return view('plans.join-free-meeting', compact('meetingId', 'meetingPassword', 'meetingOwer', 'meetingName'));
    }

}
