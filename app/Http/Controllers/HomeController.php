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
use App\News;
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
        $this->layout = "layouts.admins";
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
        $all_news = News::PrepareNewsForHomepage((News::all()));
        return view('index')
        ->with('layout','layouts.master')
        ->with('all_news', $all_news);
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
    public function getNewsIndex()
    {
        $pages = Page::PreparepagesForIndex(News::all());
        return view('news.index')
        ->with('layout',$this->layout)
        ->with('pages',$pages);
    }

    public function getNewsAdd()
    {
        return view('news.add')
        ->with('layout',$this->layout);
    }  

    public function postNewsAdd()
    {   

        $contents = Input::get('content');
        $new_content = str_replace('../..', "", $contents);

        $pages = new News();
        $pages->title = Input::get('title');
        $pages->description = Input::get('description');
        $pages->section_content = $new_content;
        $pages->status = 1;
        if ($pages->save()) {
            Flash::success('Successfully Saved');
            return Redirect::route('news_index');
        }

    }  

    public function getNewsEdit($id = null)
    {
        if (isset($id)) {
            $page = News::find($id);
            if (isset($page)) {
                $data = [];
                $data['id'] = $page->id;
                $data['page_title'] = $page->title;
                $data['description'] = $page->description;
                $data['page_section_content'] = $page->section_content;
                return view('news.edit')
                    ->with('page_data',$data)//ignore the wrong name
                    ->with('layout',$this->layout);

            }
        }
    } 


    public function postNewsEdit()
    {
        $page_id = Input::get('page_id');
        if (isset($page_id)) {
            $pages = News::find($page_id);
            if (isset($pages)) {
                $contents = Input::get('content');
                $new_content = str_replace('../../..', "", $contents);
                $pages->title = Input::get('title');
                $pages->description = Input::get('description');
                $pages->section_content = $new_content;
                $pages->status = 1;
                if ($pages->save()) {
                    Flash::success('Successfully Saved');
                    return Redirect::route('news_index');
                }
            }
            Flash::success('Error');
            return Redirect::route('news_index');
        }
    }  

    public function getNewsRemove($id = null)
    {
        $error = 1;
        if (isset($id)) {
            $page = News::find($id);
            if (isset($page)) {
                if ($page->delete()) {
                    $error = 0;
                    Flash::success('Successfully Removed');
                    return Redirect::route('news_index');
                }
            }
        }
        if ($error == 1) {
            Flash::success('Error');
            return Redirect::route('news_index');
        }
    }

}
