<?php namespace Group_F\Front\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use URL;
use Route,
    Redirect;
class FrontController extends Controller {

    public function __construct() {
    }

    public function index() {
        return view('front::front.trang_chu');
    }
    public function gioithieu() {
        return view('front::front.gioi_thieu');
    }
    public function tintuc() {
        return view('front::front.tin_tuc');
    }
    public function lienhe() {
        return view('front::front.lien_he');
    }
}