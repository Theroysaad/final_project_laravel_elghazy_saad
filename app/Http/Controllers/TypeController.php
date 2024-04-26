<?php

namespace App\Http\Controllers;

use App\Models\Types;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class TypeController extends Controller
{
        /**
     * Get all data from the types table.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllTypes()
    {
        $types = Types::all(); // Retrieve all data from the types table

        return response()->json([
            'success' => true,
            'data' => $types
        ]);
    }    
}    
