<?php

namespace App\Http\Controllers;


use Input;
use Validator;
use Redirect;
use Hash;
use Request;
use Route;
use Response;
use Auth;
use URL;
use Session;
use Laracasts\Flash\Flash;
use View;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Job;
use App\User;
use App\Thread;
use App\Category;
use App\Search;
use App\Inventory;
use App\Page;
use App\Menu;
use App\Layout;
use App\Invoice;
use App\Event;
use App\WebsiteBrand;
use App\Like;
use App\SiteView;
use Symfony\Component\HttpFoundation\StreamedResponse;

class HomeController extends Controller
{
    public function __construct() {
        $this->layout = "layouts.index-layouts.index";
        //CHECK IF THE HOMEPAGE IS SET
    }

    public function getSetPreferedLayoutSession($layout_title=null,$id=null)
    {
        $data = [];
        $error = true;
        if (isset($layout_title,$id)) {
            $data['layout_title'] = $layout_title;
            $data['layout_id'] = $id;
            $error = false;
        } 
        Session::forget('prefered_layout_session');
        Session::put('prefered_layout_session',$data);

        if (Session::get('_previous')) {
            $route_ = Session::get('_previous');
            return Redirect::to($route_['url']);
            $error = false;
        } 
        if ($error == true) {
            return Redirect::route('home_index');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getHomePage(){
        return view('index')
        ->with('layout','layouts.master');
    }

    public function getEvents()
    {
        $events = Event::PrepareEventsForEventPage();
        $layout_title = 'layouts.customize_layout';
        return view('pages.website_pages.events')
        ->with('layout',$layout_title)
        ->with('not_ind',1)
        ->with('events',$events);
    }
    public function getEventsInd($id)
    {
        if (isset($id)) {
            $this_e = Event::find($id);
            if (isset($this_e)) {
                $events = Event::PrepareEventsForEventPageInd($this_e);
                $layout_title = 'layouts.customize_layout';
                return view('pages.website_pages.events')
                ->with('layout',$layout_title)
                ->with('ind',1)
                ->with('event',$events);
            }
        }
    }

    public function getCalendar()
    {
        $layout_title = 'layouts.customize_layout';
        return view('pages.website_pages.calendar')
        ->with('layout',$layout_title);
    }
    public function getScheduling()
    {
        $layout_title = 'layouts.customize_layout';
        return view('pages.website_pages.scheduling')
        ->with('layout',$layout_title);
    }

    public function getVideos()
    {
        $layout_title = 'layouts.customize_layout';
        return view('pages.website_pages.videos')
        ->with('layout',$layout_title);
    }

    public function getDonate()
    {
        $layout_title = 'layouts.customize_layout';
        return view('pages.website_pages.donation')
        ->with('layout',$layout_title);
    }



    public function getPapers()
    {
        $layout_title = 'layouts.customize_layout';
        return view('pages.website_pages.papers')
        ->with('layout',$layout_title);
    }

    public function getMembersTestimonials()
    {
        $layout_title = 'layouts.customize_layout';
        return view('pages.website_pages.members_testimonials')
        ->with('layout',$layout_title);
    }


        public function postSendEmail()
    {
        if(Request::ajax()){
            $status = 400;
            $email = Input::get('email');
            $message_text = Input::get('message');

            if (Mail::send('emails.send_message', array(
                        'email' => $email,
                        'message_text' => $message_text
                    ), function($message) use ($email,$message_text)
                    {
                        $message->from('postmaster@webprinciples.com');
                        $message->to('pedramkhoshnevis666@yahoo.com');
                        $message->subject('Message from Your Website!');
                    })) {
                $status = 200;
            }



            return Response::json(array(
                'status' => $status
                ));
        }
    }
}
