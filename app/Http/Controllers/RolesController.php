<?php
/**
 * Author  		: Hamzah
 * Email 		: if.hamzah93@gmail.com
 * Since       	: Version 1.2 Modified
 * Dilarang merubah apapun tanpa sepengetahuan pembuat
 */
		 
namespace App\Http\Controllers;
		  
use Illuminate\Http\Request;
use DataTables;
use App\Model\Roles;
use Illuminate\Support\Facades\Auth;
		
class RolesController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		// if (!in_array(request()->segment(1), sess_menu())) return abort('403');
		$roles = Auth::user()->role;
		if ($request->ajax()) {
			$data = Roles::get();
			return Datatables::of($data)->make(true);
		}
	  	
	  	$data = array();
	  	$data['roles'] = $roles;
		return view('master.roles', $data);
	}
	 
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$param = array();
		$param['title'] = $request['title'];
		$param['active'] = $request['active'];
		if (isset($request['id']) && !empty($request['id'])) {
			$param['updated_at'] = date('Y-m-d H:i:s');
		} else {
			$param['created_at'] = date('Y-m-d H:i:s');
		}

		Roles::updateOrCreate(['id' => $request->id], $param); 
		return response()->json(['message'=> 'Roles saved successfully.','notify'=>'success']);
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Product  $product

	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$data = Roles::find($id);
		return response()->json($data);
	}
  
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Roles::find($id)->delete();
		return response()->json(['message'=>'Roles deleted successfully.s','notify'=>'success']);
	}
}