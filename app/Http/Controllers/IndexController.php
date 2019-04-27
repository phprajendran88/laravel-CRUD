<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Validator;

use App\Datas;

use Redirect;


class IndexController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function __construct()
    {
        $this->middleware('auth');
	}
	
	function list(){
		
		$rows = Datas::select();
		//$rows = DB::table('list')->paginate(3);

		return View::make('list')->with('rows', $rows);

	}
	function edit($id){
		
		$rows = Datas::getById($id);

		return View::make('edit')->with('rows', $rows);

	}
	function delete($id){
		
		$rows = Datas::delById($id);

		return Redirect::to('list');
	}
	function editValues(Request $request){
		
		$update = Datas::UpdateValues($request->post());

		//return Redirect::action('IndexController@list');
		return Redirect::to('list');
	}
	function add(Request $request){
		$method = $request->method();

		if ($request->isMethod('post')) {
			$request->validate([
				'firstName' => 'required',
				'lastName' => 'required',
				'email' => 'required'
			]);

			$rows = Datas::Insert($request);	
			return Redirect::to('list');
		}

		
		else{
			
			return View::make('add');
	
		}
	}
}
