<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index() {
        $subjects = Subject::all();
        return response()->json(['subjects' => $subjects]);

    }

    public function store(Request $request) {
        return Subject::create($request->all());
    }

    public function update(Request $request, $id) {
        $subject = Subject::find($id);
        $subject -> update($request->all());
        return response()->json(['subjects' => $subject]);
    }

    public function destroy(Request $request, $id) {
        $subject = Subject::find($id);
        $subject -> delete();
        return response()->json(['message' => 'Subject Successfully Deleted']);
    }

}
