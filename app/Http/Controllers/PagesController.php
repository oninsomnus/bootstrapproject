<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home ()
	{
		return view('home');
	}
		public function notfound ()
	{
		return view('notfound');
	}
		public function about ()
	{
		return view('about');
	}
		public function contact ()
	{
		return view('contact');
	}
		public function courseSingle ()
	{
		return view('course-single');
	}
			public function courses ()
	{
		return view('courses');
	}
			public function events ()
	{
		return view('events');
	}
			public function gallery ()
	{
		return view('gallery');
	}
			public function news ()
	{
		return view('news');
	}
			public function teachers ()
	{
		return view('teachers');
	}
}
