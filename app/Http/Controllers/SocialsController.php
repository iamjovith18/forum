<?php

namespace App\Http\Controllers;

use SocialAuth;
use Illuminate\Http\Request;

class SocialsController extends Controller
{
    public function auth($provider){
       return SocialAuth::authorize($provider);
    }

    public function auth_callback($provider){
        
    }
}
