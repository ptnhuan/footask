<?php namespace Footask\Admin\Controllers\Admin;

use App\Http\Controllers\Controller;

class FAQAdminController extends Controller {

    public function __construct() {
    }

    /**
     *
     * @return type
     */
    public function index() {
        return view('admin::admin.faq_index');
    }
}