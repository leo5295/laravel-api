<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            "name" => "required|max:50",
            "surname" => "required|max:50",
            "email" => "required|max:100|unique:contacts,email"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "errors" => $validator->errors()
            ]);
        }
        $newContact = Contact::create($data);
        Mail::to('info@boolean.it')->send(new ContactFormMail($newContact));
        return response()->json([
            "success" => true,
        ]);
    }
}
