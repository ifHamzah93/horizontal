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
use App\Model\Produk;
use App\Model\Kategori;
use Illuminate\Support\Facades\Auth;
		
class ProdukController extends Controller
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
			$data = Produk::from('produk AS a')
			->select('a.id','a.nama','a.harga','a.diskon','a.stok','a.deskripsi','a.gambar1','a.gambar2','a.gambar3','a.gambar4','a.status','b.id AS idkategori','b.nama as kategori')
			->leftJoin('kategori AS b','a.idkategori','=','b.id')
			->get();

			return Datatables::of($data)->make(true);
		}
	  	
	  	$data = array();
	  	$data['roles'] = $roles;
		return view('master.produk', $data);
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
		$param['nama'] = $request['nama_produk'];
		$param['harga'] = $request['harga'];
		$param['diskon'] = $request['diskon'];
		$param['stok'] = $request['stok'];
		$param['deskripsi'] = $request['deskripsi'];
		$param['status'] = $request['produkstatus'];
		$param['idkategori'] = $request['idkategori'];
		
		if (isset($request['id']) && !empty($request['id'])) {
			$param['updated_at'] = date('Y-m-d H:i:s');
		} else {
			$param['created_at'] = date('Y-m-d H:i:s');
		}

		$i = 1;
		foreach ($request->input('images', []) as $file) {
			$param['gambar'.$i] = $file;
			$i++;
	    }

		Produk::updateOrCreate(['id' => $request->id], $param); 
		return redirect()->route('master-produk.index');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function storeEdit(Request $request)
	{
		$nama_produk = $request->input('nama_produk');
		$harga = $request->input('harga');
		$diskon = $request->input('diskon');
		$stok = $request->input('stok');
		$param = array();
		if (isset($nama) && !empty($nama)) {
			$param['nama'] = $request['nama_produk'];
		}

		if (isset($harga)) {
			$param['harga'] = $request['harga'];
		}

		if (isset($diskon)) {
			$param['diskon'] = $request['diskon'];
		}

		if (isset($stok)) {
			$param['stok'] = $request['stok'];
		}
		
		if (isset($request['id']) && !empty($request['id'])) {
			$param['updated_at'] = date('Y-m-d H:i:s');
		} else {
			$param['created_at'] = date('Y-m-d H:i:s');
		}

		Produk::whereId($request['id'])->update($param);
		return response()->json(['message'=>'Produk update successfully.','notify'=>'success']);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Product  $product

	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$data = Produk::from('produk AS a')
		->select('a.id','a.nama','a.harga','a.diskon','a.stok','a.deskripsi','a.gambar1','a.gambar2','a.gambar3','a.gambar4','a.status','b.id AS idkategori','b.nama as kategori')
		->leftJoin('kategori AS b','a.idkategori','=','b.id')
		->where('a.id',$id)->first();

		$result  = array();
		$path = public_path().'\\assets\\images\\product\\';
		if (isset($data->gambar1) && !empty($data->gambar1)) {
			$files[0] = $data->gambar1;
		}
 		
 		if (isset($data->gambar2) && !empty($data->gambar2)) {
        	$files[1] = $data->gambar2;
    	}

    	if (isset($data->gambar3) && !empty($data->gambar3)) {
        	$files[2] = $data->gambar3;
        }

        if (isset($data->gambar4) && !empty($data->gambar4)) {
        	$files[3] = $data->gambar4;
        }

        if (isset($files) && count($files) > 0) {
        	foreach ( $files as $file ) {
	            $obj['name'] = $file;
	            $obj['size'] = \File::size($path.$file);
	            $obj['type'] = 'image/'.\File::extension($path.$file);
	            $obj['blob'] = base64_encode_file($path.$file);
	            $result[] = $obj;
	        }
	    } else {
	    	$result = array();
	    }

        $response['data'] = $data;
        $response['images'] = $result;
		return view('ecommerce-edit-product',$response);
	}
  
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$data = Produk::find($id);
		Produk::find($id)->delete();
		$path1 = public_path().'/assets/images/product/'.$data->gambar1;
		$path2 = public_path().'/assets/images/product/'.$data->gambar2;
		$path3 = public_path().'/assets/images/product/'.$data->gambar3;
		$path4 = public_path().'/assets/images/product/'.$data->gambar4;
		if (!empty($data->gambar1) && file_exists($path1)) {
			unlink($path1);
		}
		if (!empty($data->gambar2) && file_exists($path2)) {
			unlink($path2);
		}
		if (!empty($data->gambar3) && file_exists($path3)) {
			unlink($path3);
		}
		if (!empty($data->gambar4) && file_exists($path4)) {
			unlink($path4);
		}
		return response()->json(['message'=>'Produk deleted successfully.','notify'=>'success']);
	}

	/**
     * Display the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
    	$data = Kategori::select('id','nama')->limit(50)->where('nama','like','%'.$request['term'].'%')->get();
		return response()->json($data);
    }

    public function storeMedia(Request $request)
    {
    	error_reporting(0);
        ini_set('upload_max_filesize', '10M');
        ini_set('post_max_size', '20M');
        $files = $request->file('file');
        foreach ($files as $file) {
        	$nama_file = $file->getClientOriginalName();
	        $path = public_path().'/assets/images/product/';
	        $file->move($path,$nama_file);
	    }
        return response()->json(['location'=> asset('assets/images/product/'.$nama_file)]);
    }

    /**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function deleteMedia(Request $request)
	{
		$data = Produk::find($request['id']);
		if ($data->gambar1 == $request['filename']) {
			$tblname = 'gambar1';
		} else if ($data->gambar2 == $request['filename']) {
			$tblname = 'gambar2';
		} else if ($data->gambar3 == $request['filename']) {
			$tblname = 'gambar3';
		} else if ($data->gambar4 == $request['filename']) {
			$tblname = 'gambar4';
		}

		if (isset($tblname) && !empty($tblname)) {
			Produk::whereId($request['id'])->update([$tblname => null]);
			$path = public_path().'/assets/images/product/'.$request['filename'];
			if (!empty($request['filename']) && file_exists($path)) {
				unlink($path);
			}
		}
		return response()->json(['message'=>'Produk deleted successfully.','notify'=>'success']);
	}
}