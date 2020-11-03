<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APIWHA\SDK\Factory;
use APIWHA\SDK\Message\Message;
use APIWHA\SDK\Message\Image;
use APIWHA\SDK\Message\Audio;
use APIWHA\SDK\Message\PDF;

class HomeController extends Controller
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

    public function root(Request $request)
    {
        return view('dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if(view()->exists($request->path())){
            return view($request->path());
        }
        return view('pages-404');
    }

    public function clear()
    {
        \Artisan::call('optimize');
        return 'success';
    }

    public function wa()
    {
        $apiKey = 'XKFQBJV3WHUEGWIIMNOX';
        $client = (new Factory)->create($apiKey);

        $data = array('6287782062899','62895413084550','6285215077114');

        // $message = new Message($number, 'tes pesan dari skrip');
        // $message = new Message($number, 'Text message', 'custom_data');
        // $response = $client->send($message);

        foreach ($data as $val) {
            $number = $val;
            // Image Url must start with http and end with .jpg or .png
            $url = 'https://www.mastertaxplanning.com/'.$val.'.png';
            $message = new Image($number, $url);
            $response = $client->send($message);
        }

        // Audio Url must start with http and end .ogg
        // Only OGG audio supported
        // $url = 'http://addrress/audio.ogg';
        // $message = new Audio($number, $url);
        // $response = $client->send($message);

        // PDF Url must start with http and end with .pdf
        // $url = 'http://addrress/document.pdf';
        // $message = new PDF($number, $url);
        // $response = $client->send($message);

        // get message
        // $client->getMessages();
        // $client->getInboundMessages();
        // $client->getOutboundMessages();
        // $client->getNumberMessages($number);
        // $client->getCustomDataMessages($customData);

        // get Credit
        // $response = $client->getCredit();

        pr($response);
    }
}
