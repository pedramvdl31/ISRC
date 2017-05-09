<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';


   	static public function PrepareNewsForHomepage($data) {
        if (isset($data)) {
            foreach ($data as $dkey => $dvalue) {
                if(isset($dvalue['created_at'])) {
                    $dvalue['created_at_html'] = date ( 'Y/n/d',  strtotime($dvalue['created_at']) );
                    
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
}
