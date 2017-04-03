<?php namespace Footask\Admin\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProjectAdminController extends Controller {

    public function __construct() {
    }

    /**
     *
     * @return type
     */
    public function index() {
        return view('admin::admin.project_index');
    }
}