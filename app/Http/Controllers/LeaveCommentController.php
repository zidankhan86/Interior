<?php

namespace App\Http\Controllers;

use App\Models\LeaveComment;
use Illuminate\Http\Request;

class LeaveCommentController extends Controller
{

    public function store(Request $request)
    {
        try {
            $request->validate([
               'comment'     => 'required|string',
               'name'        => 'required',
               'mail'        => 'required',
           ]);

           LeaveComment::create([
               "comment"     => $request->comment,
               "name"        => $request->name,
               "mail"        => $request->mail,
           ]);

           return back()->withSuccess(['success' => 'Thank you for your comment']);
            }
       catch (\Exception $e) {
           return back()->withErrors(['error' => 'Sorry try again: ' . $e->getMessage()]);
           }

    }


}
