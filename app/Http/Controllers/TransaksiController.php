<?php

namespace App\Http\Controllers;
use App\Models\BayarSpp;
use Illuminate\Http\Request;
use Response, Redirect;
use Xendit\Xendit;

class TransaksiController extends Controller
{
    public function index()
    {
        $spp=BayarSPP::latest()->paginate(5);
        return view('spp.transaksi',compact('spp'));       
    }

    public function store(Request $request)

    {
        $this->validate($request, [
            'nis'     => 'required|min:2',
            'nama'   => 'required|min:2',
            'kelas'   => 'required|min:2',
            'bulan'   => 'required|min:2',
            'nominal'   => 'required|min:2'

        ]);


        BayarSpp::create([
            'nis'     => $request->nis,
            'nama'   => $request->nama,
            'kelas'   => $request->kelas,
            'bulan'   => $request->bulan,
            'nominal'   => $request->nominal
            
        ]);

        Xendit::setApiKey('xnd_development_Y3PeWbGNej0PhArpnZKZRWLNxvgGUvodwwicTS0RP1AyLwlB4xh0yCx6Gg');

  $params = [ 
    'external_id' =>$request->nis, // nis
    'amount' => $request->nominal, // nominal
    'description' => 'pembayaran spp',
    'invoice_duration' => 86400, // waktu
    'customer' => [
        'given_names' => $request->nama, // ambil dari reques nama        
    ],
    
    'success_redirect_url' => 'https://www.google.com', // setelah sukses bayar diarahkan 
    'failure_redirect_url' => 'https://www.detik.com',
    'currency' => 'IDR',
    
  ];

  $createInvoice = \Xendit\Invoice::create($params);
    // dd($createInvoice);    
        // return view('spp.transaksi');
        //redirect to index
// return redirect()->route('spp.index')->with(['success' => 'Data Berhasil Disimpan!']);
return Redirect::to($createInvoice['invoice_url']);
    }
}
