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
use App\Model\Users;
use App\Model\Roles;
use Illuminate\Support\Facades\Auth;
		
class UsersController extends Controller
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
			$query = Users::query();
			if (!in_array($roles, array('1'))) {
				$query->where('id','=',Auth::User()->id);
			}

			$data = $query->get();
			return Datatables::of($data)->make(true);
		}
	  	
	  	$data = array();
	  	$data['roles'] = $roles;
		return view('master.users', $data);
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
		if(isset($request['image_name']) && !empty($request['image_name'])) {
			$type = explode('/', explode(':', substr($request['image_name'], 0, strpos($request['image_name'], ';')))[1]);
			$acak = md5(rand(00000000000,99999999999));
			$image_name = ($acak.'.'.$type[1]);
			$param['image_name'] = ($acak.'.'.$type[1]);
		}
		$param['name'] = $request['name'];
		$param['email'] = $request['email'];
		if (isset($request['username']) && !empty($request['username'])) {
			$param['username'] = $request['username'];
		}
		if (isset($request['password']) && !empty($request['password'])) {
			$param['password'] = bcrypt($request['password']);
		}
		if (isset($request['roles']) && !empty($request['roles'])) {
			$param['role'] = $request['roles'];
		}
		if (isset($request['active']) && !empty($request['active'])) {
			$param['active'] = $request['active'];
		}
		if (isset($request['id']) && !empty($request['id'])) {
			$param['updated_at'] = date('Y-m-d H:i:s');
		} else {
			$param['created_at'] = date('Y-m-d H:i:s');
		}
		
		if($request['image_name'] != "") {
			$path = public_path().'/assets/images/users/';
			list($type, $request['image_name']) = explode(';', $request['image_name']);
			list(, $request['image_name']) = explode(',', $request['image_name']);
			file_put_contents($path.$image_name, base64_decode($request['image_name']));

			if (!empty($request['tmp_image']) && file_exists($path.$request['tmp_image'])) {
				unlink($path.$request['tmp_image']);
			}
		}

		Users::updateOrCreate(['id' => $request->id], $param); 
		return response()->json(['message'=> 'Users saved successfully.','notify'=>'success']);
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Product  $product

	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$data = Users::from('users AS a')
		->select('a.id','a.name','a.email','a.image_name','a.username','a.password','a.role','a.active','b.title')
		->leftJoin('roles AS b','a.role','=','b.id')
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
		$data = Users::find($id);
		Users::find($id)->delete();
		$path = public_path().'/assets/images/users/'.$data->image_name;
		if (!empty($data->image_name) && file_exists($path)) {
			unlink($path);
		}
		return response()->json(['message'=>'Users deleted successfully.s','notify'=>'success']);
	}

	/**
     * Display the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
    	$data = Roles::select('id','title')->limit(50)->where('title','like','%'.$request['term'].'%')->get();
		return response()->json($data);
    }
}