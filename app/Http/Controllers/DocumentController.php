<?php
/**
 * Created by PhpStorm.
 * User: nguyen
 * Date: 4/24/2017
 * Time: 1:55 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function add(){

        return view('document.add');
    }

    public function index(){

        return view('document.index');
    }

    public function arrive(){

        return view('document.arrive');
    }

    public function statistic(){
        return view('document.statistic');
    }
}