<?php
/**
 * Author  		: Hamzah
 * Email 		: if.hamzah93@gmail.com
 * Since       	: Version 1.2 Modified
 * Dilarang merubah apapun tanpa sepengetahuan pembuat
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Produk;
use App\Model\Kategori;

class WelcomeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function root()
	{
		$data = array();
		$data['kategori'] = Kategori::select('id','nama')->limit(5)->get();
		$sql = Produk::select('id','nama','harga','diskon','stok','deskripsi','gambar1','gambar2','gambar3','gambar4','idkategori')->limit(50)->get();
		
		$arr = array();
		foreach ($sql as $row) {
			$arr[$row['idkategori']][] = $row;
		}

		$product = array();
		foreach ($arr as $row2) {
			$i=1;
			foreach ($row2 as $v) {
				if ($i > 8) {
					break;
				} else {
					$product[] = $v;
				}
				$i++;
			}
		}

		$data['produk'] = $product;
		return view('homepage.welcome',$data);
	}

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact(Request $request)
    {
    	return view('homepage.contact-us');
    }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function register(Request $request)
    {
    	return view('homepage.register');
    }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog(Request $request)
    {
    	return view('homepage.blog');
    }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog_detail_left(Request $request)
    {
    	return view('homepage.blog-detail-left');
    }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog_detail_right(Request $request)
    {
    	return view('homepage.blog-detail-right');
    }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function checkout(Request $request)
    {
    	return view('homepage.checkout');
    }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shop_detail(Request $request)
    {
    	$data['produk'] = Produk::from('produk AS a')
		->select('a.id','a.nama','a.harga','a.diskon','a.stok','a.deskripsi','a.gambar1','a.gambar2','a.gambar3','a.gambar4','a.status','b.id AS idkategori','b.nama as kategori')
		->leftJoin('kategori AS b','a.idkategori','=','b.id')
		->where('a.id', request()->segment(2))->first();
		$data['product_all'] = Produk::select('id','nama','harga','diskon','stok','deskripsi','gambar1','gambar2','gambar3','gambar4','idkategori')
		->limit(4)
		->where([
			['idkategori','=',$data['produk']['idkategori']],
			['id','<>', request()->segment(2)]
		])->get();
    	return view('homepage.shop-detail', $data);
    }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shop_detail_sidebar(Request $request)
    {
    	return view('homepage.shop-detail-sidebar');
    }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shopgrid_sidebar(Request $request)
    {
    	return view('homepage.shopgrid-sidebar');
    }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shoplisting_sidebar(Request $request)
    {
    	return view('homepage.shoplisting-sidebar');
    }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cart(Request $request)
    {
    	return view('homepage.cart');
    }
}