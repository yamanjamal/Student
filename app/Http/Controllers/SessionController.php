<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Http\Requests\StoreSessionRequest;
use App\Http\Requests\UpdateSessionRequest;
use App\Models\Record;
use App\Models\Student;
use App\Models\Subject;

class SessionController extends Controller
{

    public function index()
    {
        $sessions = Session::all();
        return view('pages.session.indexsession')->with('sessions', $sessions);
    }

    public function create()
    {
        $subjects = Subject::all();
        return view('pages.session.createsession')
            ->with('subjects', $subjects);
    }

    public function store(StoreSessionRequest $request)
    {
        $session = Session::create($request->validated());
        return redirect()->route('session.index');
    }

    public function show(Session $session)
    {
        return view('pages.session.showsession')->with('session', $session);
    }

    public function edit(Session $session)
    {
        return view('pages.session.addstudent2session')
            ->with('session', $session);
    }

    public function update(UpdateSessionRequest $request, Session $session)
    {
        $session->update($request->validated());
        ///student_id
        $session->Students()->sync($request->student_id);


        $session->Records()->delete();
        foreach ($session->Students as $Student) {
            Record::create([
                'student_id' => $Student->id,
                'session_id' => $session->id,
            ]);
        }



        return redirect()->route('session.show', $session);
    }

    public function destroy(Session $session)
    {
        $session->delete();

        return redirect()->route('session.index');
    }
}
