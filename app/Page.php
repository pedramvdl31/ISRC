<?php

namespace App;
use App\Job;
use App\RoleUser;
use App\User;
use App\SiteSetting;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public static $rule_add = array(
        'title'=>'required',
        'description'=>'required'
    );
    public static $rule_edit = array(
        'description'=>'required',
        'slider_option'=>'required',
    );
        static public function PreparepagesForIndex($data) {

        if (isset($data)) {
            foreach ($data as $dkey => $dvalue) {
                if(isset($dvalue['created_at'])) {
                    $dvalue['created_at_html'] = date ( 'Y/n/d g:ia',  strtotime($dvalue['created_at']) );
                }           
                if(isset($dvalue['status'])) {
                    switch ($dvalue['status']) {
                        case 1: // Set but not paid
                            $dvalue['status_message']= '<span class="label label-success">Public</span>';
                            break;
                        case 2: // Recieved payment & success
                            $dvalue['status_message']= '<span class="label label-warning">Draft</span>';
                            break;
                        case 3: // Recieved with error
                            $dvalue['status_message']= '<span class="label label-danger">Deleted</span>';
                            break;

                        default:
                            $dvalue['status_message']= '<span class="label label-default">Deleted</span>';
                            break;

                    }
                }

            }
        }
        return $data;
    }
    static public function PrepareSlidersForIndex($data) {
        $output = [];

        foreach ($data as $dkey => $dvalue) {
            $title = $dvalue->title;
            $images = json_decode($dvalue->slider_images);

            $output[$title]['images'] = $images;

            $output[$title]["id"] = $dvalue->id;
        }
        return $output;
    }

    static public function PrepareSlidersForEdit($data) {
        $output = [];
        $title = $data->title;
        $images = json_decode($data->slider_images);
        $output['images'] = $images;
        $output["id"] = $data->id;
        return $output;
    }

    public static function PerparePagesSelect() {
        $data =  Page::where('id',1)->get();
        $ps = array(''=>'Select a Page');
        if(isset($data)) {
            foreach ($data as $dkey => $dvalue) {
                
                $idd = $dvalue->id;
                $title = $dvalue['title'];
                $ps[$idd] = $title; 
            }

        }
        return $ps;
    }
    public static function PrepareAllPagesSelect() {
        $data =  Page::all();
        $ps = array(''=>'None');
        if(isset($data)) {
            foreach ($data as $dkey => $dvalue) {
                
                $idd = $dvalue->id;
                $title = $dvalue['title'];
                $ps[$idd] = $title; 
            }

        }
        return $ps;
    }

    public static function Isset_Homepage() {
        $homepage = Page::find(1);
        if (!isset($homepage)) {
            $new_homepage = new Page();
            $new_homepage->id = 1;
            $new_homepage->title = 'home';
            $new_homepage->description = 'home page, automatically generated';
            $new_homepage->slider_option = true;
            $new_homepage->status = 1;
            $new_homepage->param_one = 'home';
            $new_homepage->save();
        } 
        $sst = SiteSetting::find(1);
        if (!isset($sst)) {
            $sstn = new SiteSetting();
            $sstn->mode = 1;
            $sstn->save();
        } 
    }
    
    public static function PareparePageSlider($pages) {
        $slider_images = null;
        if ($pages->slider_option == true) {
            if (!empty($pages->slider_images) && isset($pages->slider_images) ) {
                $len = sizeof(json_decode($pages->slider_images, true));
                if ($len > 0) {
                    $slider_images =  json_decode($pages->slider_images, true);
                }
            } 
        } 
        return $slider_images;
    }

    public static function PrepareSliderOptionSelect() {
        $cats = array(
                        ''=>'Slider Option',
                        '1' => 'Yes',
                        '0' => 'No'
                    );
        return $cats;
    }
    public static function PrepareSectionHtml($sec_number) {
        $html = '';
        if (isset($sec_number)) {
            $sec_minus_1 = $sec_number-1;
            $html = '                    
                <h3>Section '.$sec_number.'</h3>
                <div class="form-group">
                  <label class="control-label" for="title">Title</label>
                    <input type="text" name="section['.$sec_minus_1.'][title]" value="" class="form-control" placeholder="Title">
                </div>
                <div class="form-group ">
                  <label class="control-label" for="description">Description</label>
                  <textarea name="section['.$sec_minus_1.'][description]" rows="3" cols="30" class="des field form-control" placeholder="Description"></textarea>
                </div>
                <hr>';
        }
        return $html;
    }
}
