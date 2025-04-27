<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class SavedDesignController extends Controller
{
    //
    public function save($designId)
    {
        $design = Design::findOrFail($designId);
        auth()->user()->savedDesigns()->attach($designId);

        return redirect()->back()->with('success', 'Design saved to your profile!');
    }

    public function profile()
    {
        $savedDesigns = auth()->user()->savedDesigns;

        return view('profile.saved_designs', compact('savedDesigns'));
    }
}
