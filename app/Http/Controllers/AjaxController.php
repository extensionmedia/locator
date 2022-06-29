<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function content(Request $request){
        $content = $request->input('content');
        $params = [];

        if($content == 'home'){
            $params = [
                'marqees' =>  [
                                "income",
                                "expense",
                                "contract",
                                "auto"
                ],
                'activities' => HomeController::usersActivities()
            ];
        }

        if($content == 'client' ){
            $params = [
                'clients' =>  Client::orderBy('client_name', 'asc')->paginate(20)
            ];
        }
        if(view()->exists('pages.'.$content.'.content'))
            return view('pages.'.$content.'.content', $params);
            
        return view('errors.404.404');
    }
}
