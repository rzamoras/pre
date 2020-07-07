<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.index');
    }

    //Cashiering
    public function registration()
    {
        return view('pages.cashiering.registration');
    }
    public function fees()
    {
        return view('pages.cashiering.fees');
    }

    //Student Account
    public function soa()
    {
        return view('pages.studentAccount.soa');
    }
    public function studentList()
    {
        return view('pages.studentAccount.studentList');
    }
    public function subsidiary()
    {
        return view('pages.studentAccount.subsidiary');
    }
    public function summary()
    {
        return view('pages.studentAccount.summary');
    }

    //students
    public function dashboard()
    {
        return view('pages.students.dashboard');
    }
    public function list()
    {
        return view('pages.students.list');
    }
    public function addPayor()
    {
        return view('pages.students.addPayor');
    }
    public function records()
    {
        return view('pages.students.records');
    }

    //library
    public function manageBooks()
    {
        return view('pages.library.manage');
    }
    public function borrow()
    {
        return view('pages.library.borrow');
    }
    public function return()
    {
        return view('pages.library.return');
    }
    public function monitoring()
    {
        return view('pages.library.monitoring');
    }

    //teachers
    public function manageTeachers()
    {
        return view('pages.teachers.manage');
    }
    public function faculties()
    {
        return view('pages.teachers.faculties');
    }
    public function personnel()
    {
        return view('pages.teachers.personnel');
    }

    //course
    public function manageCourse()
    {
        return view('pages.courses.manage');
    }
    public function course()
    {
        return view('pages.courses.course');
    }

    //Events
    public function manageEvents()
    {
        return view('pages.events.manage');
    }
    public function addEvent()
    {
        return view('pages.events.eventsAdd');
    }
    public function upcomingEvents()
    {
        return view('pages.events.eventsUpcoming');
    }

    //messages
    public function feedback()
    {
        return view('pages.messages.feedback');
    }
    public function email()
    {
        return view('pages.messages.email');
    }
    public function sms()
    {
        return view('pages.messages.sms');
    }
}
