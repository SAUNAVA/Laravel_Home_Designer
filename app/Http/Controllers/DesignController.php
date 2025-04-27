<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    //
    public function search()
    {
        $latestLayout = auth()->user()->roomLayouts()->latest()->first();
    
        if (!$latestLayout) {
            return redirect()->route('room-layouts.create')->with('error', 'Please create a room layout first.');
        }
    
        $designs = Design::where('name' , $latestLayout->name)
                         ->where('length', '<=', $latestLayout->length)
                         ->where('width', '<=', $latestLayout->width)
                         ->where('height', '<=', $latestLayout->height)
                          // New filtering by style
                         ->get();
    
        return view('designs.search', compact('designs'));
    }
    public function index()
    {
        $designs = Design::all();
        return view('dashboard' , compact('designs') );
    }
    
public function destroy($id)
{
    $design = Design::findOrFail($id);
    $design->delete();

    return redirect()->back()->with('success', 'Design deleted successfully!');
}
    
}
