<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class UserController extends Controller
{
    public function index()
    {

        $projects = Project::with(['technologies', 'type'])->get();

        return response()->json([
            "success" => true,
            "results" => $projects
        ]);
    }
    public function show($slug)
    {
        $detail = Project::with(['technologies', 'type'])->where('slug', $slug)->first();
        if ($detail) {
            return response()->json([
                "success" => true,
                "results" => $detail
            ]);
        } else {
            return response()->json([
                "success" => false,
                "results" => 'non ho trovato il progetto zono'
            ]);
        }
    }
}
