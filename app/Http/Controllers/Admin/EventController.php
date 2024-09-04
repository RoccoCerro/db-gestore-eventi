<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Database\Query\IndexHint;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(StoreEventRequest $request)
    {
        $data_event = $request->validated();

        // Generate the slug
        $base_slug = Str::slug($data_event['name']);
        $slug = $base_slug; 
        $n = 0;

        do {
            // SELECT * FROM `posts` WHERE `slug` = ?
            $find = Event::where('slug', $slug)->first(); // null | Post

            if ($find !== null) {
                $n++;
                $slug = $base_slug . '-' . $n;
            }
        } while ($find !== null);

        $data_event['slug'] = $slug;
        // End generation the slug


        // Format the date
        function formattedDate($input){

            $date = Carbon::parse($input);
            $date_formatted = $date->format('Y-m-d H:i:s');

            return $date_formatted;
        }

        $start = $data_event['start'];
        $end_of_sale = $data_event['end_of_sale'];
        
        $data_event['start'] = formattedDate($start);
        $data_event['end_of_sale'] = formattedDate($end_of_sale);
        // End formatting date

        $new_event = Event::create($data_event);

        return to_route('admin.events.show', $new_event);

    }

    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        $data_event = $request->validated();
        $event->update($data_event);

        // dd($request->all());
        return to_route('admin.events.show', $event);
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return to_route('admin.events.index');
    }
}
