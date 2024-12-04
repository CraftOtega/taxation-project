<?php

namespace App\Http\Controllers\Govt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GovtController extends Controller
{
    public function indexDashboard(){

        return view("dash");
    }



//     public function indexuser(){



//         return view("govt.users.userlist");
// }

}
