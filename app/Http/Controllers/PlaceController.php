<?php

namespace App\Http\Controllers;

use App\Models\Places;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function space(Places $place)
    {
        // return view('workspace');
        // $places = Places::with('types')->get();
        return view('workspace', compact('place'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        request()->validate([
            'name' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg',
            'amenities' => 'required',
            'HourPrice' => 'required',
            'description' => 'required',
            'types_id' => 'required',
        ]);

        // Store the image in storage
        $image = $request->file("image");
        if ($image) {
            $imageName = time() . "_" . $image->getClientOriginalName();
            $image->storeAs("public/img", $imageName);
        } else {
            $imageName = null;  // Set image name to null if no image uploaded
        }

        // Create a new Place instance and save it to the database
        //dd('rgdc');
        Places::create([
            'name' => $request->name,
            'image' => $imageName,
            'amenities' => $request->amenities,
            'HourPrice' => $request->HourPrice,
            'description' => $request->description,
            'types_id' => $request->types_id
        ]);

        // Redirect back with success message
        return back()->with('success', 'Co-working space created successfully!');
    }

    public function destroy(Places $place)
    {
        $place->delete();
        return back();
    }

    public function show(Places $place)
    {
        return view("workspace", compact("product"));
    }

    public function update(Request $request, Places $place)
    {
        //* validate request as usual
        request()->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',  // Allow image to be null
            'amenities' => 'required',
            'HourPrice' => 'required',
            'description' => 'required',
        ]);
        //* use update method to edit the columns with the request received
        
        $image = $request->file("image");
        if ($image) {
            $imageName = time() . "_" . $image->getClientOriginalName();
            $image->storeAs("public/img", $imageName);
        } else {
            // Keep the existing image if no new image uploaded
            $imageName = $place->image;
        }
        $place->update([
            'name' => $request->name,
            'image' => $imageName,
            'amenities' => $request->amenities,
            'HourPrice' => $request->HourPrice,
            'description' => $request->description
        ]);
        
        //* redirect user  to  a specefic route 
        return back();
    }

}
