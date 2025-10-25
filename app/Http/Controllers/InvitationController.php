<?php

// app/Http/Controllers/InvitationController.php
namespace App\Http\Controllers;
use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller {
    public function show($slug) {
        $inv = Invitation::where('slug', $slug)->firstOrFail();
        return view('invitations.show', compact('inv'));
    }

    public function index() {
        $invitations = Invitation::all();
        return view('invitations.index', compact('invitations'));
    }
}
