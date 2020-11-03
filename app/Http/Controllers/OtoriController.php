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
use App\Model\Otori;
use App\Model\Menu;
use Illuminate\Support\Facades\Auth;
		
class OtoriController extends Controller
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
		// if (Auth::User()->role != '1') return abort('403');
		$id = request()->segment(2);
		$data = array();
		$data['menu'] = Menu::from('dyn_menu AS a')
		->select('a.id','a.title','a.url','b.menu_id','b.show_menu')
		->leftJoin('otori AS b', function($q) use ($id) {
            $q->on('a.id','=','b.menu_id')
                ->where('b.user_id', '=', $id);
        })->get();

		$data['roles_id'] = $id;
		return view('master.otori', $data);
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
		$roles_id = $request['roles_id'];
		$menu_id = $request['menu_id'];
		if (empty($menu_id)) {
			Otori::where('user_id', $roles_id)->delete();
		} else {
			Otori::where('user_id', $roles_id)->delete();
			$params = array();
			for ($i=0;$i<count($menu_id);$i++) {
				$params[] = array(
					'user_id' => $roles_id,
					'menu_id' => $menu_id[$i],
					'show_menu' => 1
				);
			}
			
			if (count($params) > 0) {
				Otori::insert($params);
			}
		}
		return redirect('master-roles');
	}
}