<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Models\Fasilitashotel;
use Yajra\DataTables\DataTables;

class FasilitashotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitashotel = Fasilitashotel::paginate(5);
        return view('fasilitashotel/fasilitashotel',compact('fasilitashotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $fasilitashotel = Fasilitashotel::find($id);
        return view('fasilitashotel.detailfasilitashotel', compact('fasilitashotel'));
    }

    public function exporthotel(PDF $pdfCreator)
    {
        $fasilitashotel = Fasilitashotel::all();
        view()->share('fasilitashotel', '$fasilitashotel');
        $pdf = $pdfCreator->loadView('fasilitashotel.fasilitashotelpdf', ['fasilitashotel' => $fasilitashotel]);
        return $pdf->download('datafasilitashotel.pdf');
    }

    public function create()
    {
        return view('fasilitashotel/fasilitashotelcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pt = $request->image;
        $ptFile = $pt->getClientOriginalName();
        $pt->move(public_path().'/img',$ptFile);
        Fasilitashotel::create([
            'namahotel' => $request->namahotel,
            'alamat' => $request->alamat,
            'keterangan' => $request->keterangan,
            'image' => $ptFile,
        ]);

        return Redirect('/fasilitashotel')->with('success', 'Data Fasilitas Hotel berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitashotel = Fasilitashotel::findorfail($id);
        return view('fasilitashotel/fasilitashoteledit',compact('fasilitashotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fasilitashotel = Fasilitashotel::findorfail($id);
        $fasilitashotel -> update($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('img/', $request->file('image')->getClientOriginalName());
            $fasilitashotel->image = $request->file('image')->getClientOriginalName();
            $fasilitashotel -> save();
        }
        return redirect('/fasilitashotel')->with('success', "Data Fasilitas hotel Berhasil Di Update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Fasilitashotel::findorfail($id);
        $delete->delete();
        return back()->with('destroy', "Data Fasilitas hotel Berhasil Di Delete");
    }
}
