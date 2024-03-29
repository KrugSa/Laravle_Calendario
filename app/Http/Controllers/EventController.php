<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use MadHatter\LaravelFullCalendar\Facades\Calendar;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::all();
        $event = [];        
        foreach($events as $row){
            $enddate = $row->end_date."24:00:00";
            
            $event[]=\Calendar::event( $row->title,
            false,
            new \DateTime($row->start_date),
            new \DateTime($row->end_date),
            $row->id,
            [
                'color' => $row->color,
            ]               
            );
        }
        $calendar=\Calendar::addEvents($event);
        return view('eventpage', compact('events','calendar'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function display(){
        return view('addevent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request){
        $this->validate($request,
       ['title' =>'required',
       'color'=>'required',
        'id_restaurant'=>'required',
        'start_date'=>'required',
        'end_date'=>'required']);
        $events= new Event;
        $events->title = $request->input('title');
	    $events->title=$request->input('color');
        $events->title = $request->input('start_date');
        $events->title = $request->input('end_date');
        $events-> save();
        return redirect('events')->with('success','Evento Agregado');
    }


    public function store(Request $request)
    {
        //
       /* $this->validate($request,
       ['title' =>'required',
        'id_restaurant'=>'required',
        'start_date'=>'required',
        'end_date'=>'required']);
        $events= new Event;
        $events->title = $request->input('title');
	    $events->title=$request->input('color');
        $events->title = $request->input('start_date');
        $events->title = $request->input('end_date');
        dd($events);
        $events-> save();
        return redirect('events')->with('success','Evento Agregado');*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
