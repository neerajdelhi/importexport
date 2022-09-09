<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\BulkLedger;
use Excel;
use Maatwebsite\Excel\Support\Conterns\FormCollection;
use App\Exports\CsvExport;
use App\Imports\CsvImport;
use App\Exports\BulkLedgerExport;
use App\Imports\BulkLedgerImport;

 
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
	
	//import export bulk ledger
	public static function bulk_ledger(){
		$bulk_ledger = BulkLedger::OrderBy('Sr','asc')->paginate(3);
		return view('bulk_ledger',compact('bulk_ledger'));
	}
	
	public function bulk_ledger_export(){
		return Excel::download(new BulkLedgerExport, 'BulkLedgerExport.csv');
	}
	public function bulk_ledger_import(Request $request){
		Excel::import(new BulkLedgerImport, $request->file('file'));
		return back();
	}
}
