<?php
/**
 * Author  		: Hamzah
 * Email 		: if.hamzah93@gmail.com
 * Since       	: Version 1.2 Modified
 * Dilarang merubah apapun tanpa sepengetahuan pembuat
 */
		 
namespace App\Http\Controllers;
		  
use Illuminate\Http\Request;
use App\Model\Menu;
use DataTables;
use Illuminate\Support\Facades\Auth;
		
class MenuController extends Controller
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
			$query = Menu::query();
			return Datatables::of($query)->make(true);
		}
	  	
	  	$data = array();
	  	$data['roles'] = $roles;
		return view('master.menu', $data);
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
		$param['url'] = $request['url'];
		$param['parent_id'] = !empty($request['parent_id']) ? $request['parent_id'] : 0;

		if (isset($request['id']) && !empty($request['id'])) {
			$param['updated_at'] = date('Y-m-d H:i:s');
		} else {
			$param['created_at'] = date('Y-m-d H:i:s');
		}

		Menu::updateOrCreate(['id' => $request->id], $param); 
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
		$data = Menu::from('dyn_menu AS a')
		->select('a.id','a.title','a.url','a.parent_id','b.title AS parent_name')
		->leftJoin('dyn_menu AS b','a.parent_id','=','b.id')
		->where('a.id',$id)->first();
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
		Menu::find($id)->delete();
		return response()->json(['message'=>'Menu deleted successfully.s','notify'=>'success']);
	}

	/**
     * Display the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
    	$data = Menu::select('id','title')->limit(50)->where('title','like','%'.$request['term'].'%')->get();
		return response()->json($data);
    }
}