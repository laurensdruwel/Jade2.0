<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Event as Event;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use App\User;

class EventController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();


        Mapper::map(51.20947, 3.22370, ['zoom' => 18]); //your location
        foreach($events as $event){

            Mapper::marker($event->latitude, $event->longitude, ['symbol' => 'circle', 'scale' => 1000, 'animation' => 'DROP']);

        ;}

//






        return view('allEvents', ['events' => $events]);
    }


    public function addEvent(Request $eventData){

        //return $eventData;

        $this->validate($eventData, [
            'eventname' => 'required',
            'time' => 'required',
            'place' => 'required',
            'radius' => 'required',
//            'public' => 'required',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
            'date' => 'required'

        ]);


        $event = new Event([
           'name' => $eventData->input('eventname'),
            'place' => $eventData->input('place'),
            'radius' => $eventData->input('radius'),
            'time' => $eventData->input('time'),
            'public' => 1,
            'category' => $eventData->input('category'),
            'description' => $eventData->input('description'),
            'longitude' => 57,
            'latitude' => 23,
            'hostEmail' => Auth::user()->email,
            'price' => $eventData->input('price'),
            'date' => $eventData->input('date')

        ]);




        $event->save();
        return redirect()->route('allEvents');




    }

    public function getEvent($eventId)
    {
        $events = Event::where($eventId);
        $event = $events[0];

        echo getCoordinates('740 Story Rd San Jose CA 95122');


        function getCoordinates($address){

            $address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern

            $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";

            $response = file_get_contents($url);

            $json = json_decode($response,TRUE); //generate array object from the response from the web

            return ($json['results'][0]['geometry']['location']['lat'].",".$json['results'][0]['geometry']['location']['lng']);

        }

        //return $json;
//        Mapper::map(Mapper::location($event->place));
//        Mapper::map($event->latitude,
//            $event->longitude,
//            [
//                'zoom' => 16,
//                'draggable' => true,
//                'marker' => true,
//                'disableDefaultUI' => true,
//                'eventAfterLoad' =>
//                    'circleListener(maps[0].shapes[0].circle_0);'
//            ]
//        );
//        var_dump($event);
//        return $event->name;

//        return view('eventDetails', ['event' => $event]);
    }




}
