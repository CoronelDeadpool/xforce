<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
}

public function index() { 

 

return view('welcome'); 

}

public function index() { 

   $users = User::all(); 

   foreach ($users as $user) { 

       echo $user->nombre . '->' . $user->department->bono . '<br>'; 

   } 

} 

use App\User