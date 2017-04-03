<?php namespace Footask\Admin\Controllers\Admin;

use App\Http\Controllers\Controller;

class ContactAdminController extends Controller {

    public function __construct() {
    }

    /**
     *
     * @return type
     */
    public function index() {
        return view('admin::admin.contact_index');
    }
}