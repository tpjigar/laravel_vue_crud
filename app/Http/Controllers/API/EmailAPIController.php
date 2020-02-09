<?php

namespace App\Http\Controllers\API;

use App\Email;
use App\Http\Resources\EmailCollection;
use App\Http\Resources\EmailResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailAPIController extends Controller
{
    public function index()
    {
        return new EmailCollection(Email::paginate());
    }
 
    public function show(Email $email)
    {
        return new EmailResource($email->load(['customer']));
    }

    public function store(Request $request)
    {
        return new EmailResource(Email::create($request->all()));
    }

    public function update(Request $request, Email $email)
    {
        $email->update($request->all());

        return new EmailResource($email);
    }

    public function destroy(Request $request, Email $email)
    {
        $email->delete();

        return response()->noContent();
    }
}
