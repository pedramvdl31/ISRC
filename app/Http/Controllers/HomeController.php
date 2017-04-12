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


        $user = '';

        // Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
        //     $m->from('hello@app.com', 'Your Application');

        //     $m->to('pedramkhoshnevis@gmail.com', 'pedram')->subject('Your Reminder!');
        // });

        return view('index')
        ->with('layout','layouts.master');
    }





        public function postPurchaceRequest()
    {
        if(Request::ajax()){

            $flag = 0;
            $status = 400;
            $err = '';
            $suc = 'Thank you for contacting us - we will get back to you soon!';
            $pform = null;
            parse_str(Input::get('pform'), $pform);
            $mdata = array( 'name' => $pform['name'],
                            'organization' => $pform['organization'],
                            'email' => $pform['email2'],
                            'phone' => $pform['phone'],
                            'model' => $pform['model'],
                            'comment' => $pform['add-comment'],
                            'captcha' => $pform['g-recaptcha-response'],
                            );

            if (filter_var($mdata['email'], FILTER_VALIDATE_EMAIL)) {
                $status = 200;
            } else {
                $flag=1;
                $err  = 'Not a valid email address.';
                $status = 400;
            }
            if ($mdata['captcha']!=""||!empty($mdata['captcha'])) {
                $status = 200;
            } else {
                $flag=1;
                $err  = 'Please check the the captcha.';
                $status = 400;
            }
            if ($mdata['name']!=""||!empty($mdata['name'])) {
                $status = 200;
            } else {
                $flag=1;
                $err  = 'Please fill in required fields.';
                $status = 400;
            }
            if ($mdata['phone']!=""||!empty($mdata['phone'])) {
                $status = 200;
            } else {
                $flag=1;
                $err  = 'Please fill in required fields.';
                $status = 400;
            }
            if ($mdata['organization']!=""||!empty($mdata['organization'])) {
                $status = 200;
            } else {
                $flag=1;
                $err  = 'Please fill in required fields.';
                $status = 400;
            }
            if ($flag==1) {
                $status = 400;
            }

            if ($flag==0) {
                $all_emails = ['sukhan@ingvision.co.kr', 'sales@ingvision.co.kr','support@ingvision.co.kr','master@ingvision.co.kr'];
                if (
                        Mail::send('emails.purchase_request', ['mdata' => $mdata], function ($m) use ($all_emails) {
                            $m->from('support@www.webprinciples.com', 'INGVision');
                            $m->to($all_emails)->subject('INGVISION-Purchase Request');
                        })
                    ) {
                            return Response::json(array(
                                'status' => $status,
                                'err' => $err,
                                'suc' => $suc
                                ));
                             }
            }

            return Response::json(array(
                'status' => $status,
                'err' => $err,
                'suc' => $suc
                ));
        }
    }
}
