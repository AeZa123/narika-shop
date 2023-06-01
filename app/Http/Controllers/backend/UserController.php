<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function script(){
        
//    <link rel="stylesheet" href="{{asset('assets/templateLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
//    <link rel="stylesheet" href="{{asset('assets/templateLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
        $script = array();

        // $data = new Controller();
        // $data->datatable();

        // <script src="{{asset('assets/templateLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        // <script src="{{asset('assets/templateLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        // <script src="{{asset('assets/templateLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        // <script src="{{asset('assets/templateLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        // <script src="{{asset('assets/templateLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        // <script src="{{asset('assets/templateLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        // <script src="{{asset('assets/templateLTE/plugins/jszip/jszip.min.js')}}"></script>
        // <script src="{{asset('assets/templateLTE/plugins/pdfmake/pdfmake.min.js')}}"></script>
        // <script src="{{asset('assets/templateLTE/plugins/pdfmake/vfs_fonts.js')}}"></script>
        // <script src="{{asset('assets/templateLTE/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        // <script src="{{asset('assets/templateLTE/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        // <script src="{{asset('assets/templateLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>


        // datatable 
        $script['js'] = "<script src='/assets/templateLTE/plugins/datatables/jquery.dataTables.min.js'></script>";
        $script['js'] .= "<script src='/assets/templateLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'></script>";
        $script['js'] .= "<script src='/assets/templateLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js'></script>";
        $script['js'] .= "<script src='/assets/templateLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'></script>";
        $script['js'] .= "<script src='/assets/templateLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js'></script>";
        $script['js'] .= "<script src='/assets/templateLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'></script>";
        $script['js'] .= "<script src='/assets/templateLTE/plugins/jszip/jszip.min.js'></script>";
        $script['js'] .= "<script src='/assets/templateLTE/plugins/pdfmake/pdfmake.min.js'></script>";
        $script['js'] .= "<script src='/assets/templateLTE/plugins/pdfmake/vfs_fonts.js'></script>";
        $script['js'] .= "<script src='/assets/templateLTE/plugins/datatables-buttons/js/buttons.html5.min.js'></script>";
        $script['js'] .= "<script src='/assets/templateLTE/plugins/datatables-buttons/js/buttons.print.min.js'></script>";
        $script['js'] .= "<script src='/assets/templateLTE/plugins/datatables-buttons/js/buttons.colVis.min.js'></script>";
        $script['js'] .= "<script src='/assets/templateLTE/js/m_user.js'></script>";
        // $script['js'] = 'assets/templateLTE/js/m_user.js';
        // $script['js'] = 'assets/templateLTE/js/m_user.js';

        



        $script['link'] = "<link rel='stylesheet' href='assets/templateLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'>";
        $script['link'] .= "<link rel='stylesheet' href='assets/templateLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'>";
        $script['link'] .= "<link rel='stylesheet' href='assets/templateLTE/plugins/datatables-bs4/css/buttons.bootstrap4.min.css'>";
        return $script;
    }
    
    public function index()
    {
        //load script
        $script = $this->script();
        $js_custom = $script['js'];
        $css = $script['link'];


        //get users
        $datas = User::all();

        // dd($datas);
        return view('backend.views.m_users.list', compact('datas', 'js_custom', 'css'));
    }

    public function create(Request $request){


        $script = $this->script();
        $js_custom = $script['js'];
        $css = $script['link'];


        
        
        return view('backend.views.m_users.add', compact('js_custom'));

    }
}
