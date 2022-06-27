<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{

    public function index(){
        $marqees = [
            "income",
            "expense",
            "contract",
            "auto",
        ];
        return view('pages.home.index', ["marqees" => $marqees, "activities"=>$this::usersActivities()]);
    }

    public static function usersActivities(){
        $images = [
            'http://rubick-vue.left4code.com/assets/profile-11.97c505a8.jpg',
            'http://rubick-vue.left4code.com/assets/profile-13.d2befb57.jpg',
            'http://rubick-vue.left4code.com/assets/profile-3.614e7dcb.jpg',
            'http://rubick-vue.left4code.com/assets/profile-10.7f88f31b.jpg',
            'http://rubick-vue.left4code.com/assets/profile-4.eb6bc8ad.jpg'
        ];
        $users = [
            'Yassine EL MEFTOUHI',
            'Anas MARRAKCHI',
            'Fahd SEFFAR',
            'Souad BENAMAR',
            'Amina SAADIA'
        ];
        $all = [];
        $lorem = "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.";
        $count_of_activities = rand (3, 5);
        for ($i=0; $i < $count_of_activities ; $i++) { 
            $random = rand (0, count($images)-1);

            array_push($all, [
                                    'profile_photo_path'        =>  $images[ $random ],
                                    'name'                      =>  $users[ $random ],
                                    'activity'                  =>  \substr($lorem,0,rand (20, \strlen($lorem))),
                                    'created_at'                =>  '15:42'
                            ]);
        }
        return $all;
    }

}
