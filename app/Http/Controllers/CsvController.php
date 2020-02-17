<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Excel;
use Maatwebsite\Excel\Support\Conterns\FormCollection;
use App\Exports\CsvExport;
use App\Imports\CsvImport;

class CsvController extends Controller
{
    public static function index(){
		$user = User::OrderBy('id','desc')->paginate(5);
		return view('welcome',compact('user'));
	}
	
	public function export(){
		return Excel::download(new CsvExport, 'sample.csv');
	}
	public function import(Request $request){
		Excel::import(new CsvImport, $request->file('file'));
		return back();
	}
}
