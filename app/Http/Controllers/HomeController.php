<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategoris = Kategori::get();
        $posts = Post::with('user')
            ->orderBy('created_at', 'desc')
            ->paginate(8);
//        return $posts;
        return view('pages.home', compact('kategoris', 'posts'));
    }

    public function faq()
    {
        $kategoris = Kategori::get();
        return view('pages.faq', compact('kategoris'));
    }

    public function ask(Request $request)
    {
        $no_bits = '6282245482429';     $no_itec = '6282338251752';
        $no_icom = '6285732442883';     $no_laosarena = '6285855089931';

        $URl = "api.whatsapp.com/send?phone=%T%&text=%M%";

        $kategori = $request['kategori'];
        $raw_pesan = rawurlencode("Halo... Saya dari tim *".$request['nama_tim']."* Kategori *".$kategori."* ingin bertanya: ".$request['pesan']);

        if($kategori=="PPL" || $kategori=="Bisnis TIK" || $kategori=="Smart City" || $kategori=="PKM-GO" || $kategori=="KTI" )
        {
            $target = $no_bits;
        }else if($kategori=="UI/UX" || $kategori=="IOT"){
            $target = $no_itec;
        }else if($kategori=="Game" || $kategori=="CPC"){
            $target = $no_icom;
        }else if($kategori=="CTF" ){
            $target = $no_laosarena;
        }else{
          return redirect()->back()->with('error', 'Gagal dikirim');
        }

        $orig = array("%T%", "%M%");
        $mod  = array($target, $raw_pesan);

        $pesan = str_replace($orig, $mod, $URl);
        return redirect('https://'.$pesan);
    }

}
