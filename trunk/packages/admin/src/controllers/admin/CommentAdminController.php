<?php namespace Footask\Admin\Controllers\Admin;

use App\Http\Controllers\Controller;

class CommentAdminController extends Controller {

    public function __construct() {
    }

    /**
     *
     * @return type
     */
    public function index() {
        return view('admin::admin.comment_index');
    }
}