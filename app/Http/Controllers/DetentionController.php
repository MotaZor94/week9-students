<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Detention;

class DetentionController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $detention = new Detention;
        $detention->subject = $request->subject;
        $detention->description = $request->description;
      
        $detention->save();
        return redirect(action('StudentController@index'));
    }
}
