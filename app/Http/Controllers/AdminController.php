<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of AdminController
 *
 * @author champ
 */
class AdminController extends Controller {

    public function dashboard() {
        return view('admin.dashboard');
    }

}
