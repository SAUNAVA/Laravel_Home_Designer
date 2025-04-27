<?php

namespace App\Http\Controllers;

use App\Models\RoomLayout;
use App\Models\Design;
use Illuminate\Http\Request;

class RoomLayoutController extends Controller
{
    public function create()
    {
        return view('room_layouts.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'length' => 'required|numeric',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'style' => 'required|string',
        ]);
    
        // Save the room
        $room = RoomLayout::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'length' => $request->length,
            'width' => $request->width,
            'height' => $request->height,
            'style' => $request->style,
        ]);
    
        // Redirect to the designs page, showing matching designs based on the room created
        return redirect()->route('designs.search');
    }
}

