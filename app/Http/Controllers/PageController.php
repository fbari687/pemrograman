<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Book;
use App\Models\Member;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('admins.dashboard', [
            'bookCount' => Book::count(),
            'memberCount' => Member::count(),
            'librarianCount' => Admin::count()
        ]);
    }

    public function book(Book $book)
    {
        return view('book', [
            'book' => $book
        ]);
    }
}
