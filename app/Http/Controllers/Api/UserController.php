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
}
