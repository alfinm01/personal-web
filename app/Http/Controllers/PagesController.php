<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function getIndex() {
        return view('pages.home');
    }

    public function getAbout() {
        // dd('About');
        return view('pages.about');
    }

    /*** Post pages ***/

	    public function getPost() {
            // dd('Post via PagesController');
            return view('pages.post');
	    }

	    public function getPostContent() {

	    }

	    public function getPostCategory() {

	    }

	    public function getPostTag() {

	    }

	/*****************/

    public function getContact() {
        return view('pages.contact');
    }

    public function postContact() {

    }

/*
    public function getLogin() {

    }
*/
    
    public function getAdmin() {

    }

}
