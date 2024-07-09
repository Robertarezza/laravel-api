<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        if (Auth::id() != $id) {
            abort(404);
        }

        $user = Auth::user();
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
    }
}
