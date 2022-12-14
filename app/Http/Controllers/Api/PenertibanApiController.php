<?php

namespace App\Http\Controllers\Api;

use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Penertiban;
use App\Models\Tahapan;
use App\Helpers\Helper;
use App\Models\Jenis;
use DataTables;

class PenertibanApiController extends Controller
{
    public function json(Request $request){
        // $data = Skrk::select('*');
        if ($request->ajax()) {
            $data = Penertiban::select('*')->limit(10000);
            // dd($data);
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        // $gid = $data->gid;
                        // dd($gid);
                        $view = route('show', $data);
                        $btn = '<input type="hidden" name="id" id="id" value="'.$data->id.'">';
                        $btn = $btn . '<a href="'.$view.'" target="_blank" onclick="show_json('.$data->id.')" data-id="'.$data->id.'" class="edit btn btn-info btn-sm mr-2 mb-2">
                        View
                        </a>';
                        $btn = $btn . '<a href="javascript:void(0)" onclick="edit_json('.$data->id.')" data-id="'.$data->id.'" data-toggle="modal" data-target="#modal-lg" class="edit btn btn-primary btn-sm mr-2 mb-2">
                        Update
                        </a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('home1');
        // return response()->json($data);
    }

    public function show_json($id)
    {
        // dd($id);
        // $aspects = Penertiban::find($id)->where('penertiban.id',$id)->selectRaw('*')->join('jenis','penertiban.jenis_id','=','jenis.id')->first();
        $aspects = Penertiban::find($id);
        // dd($aspects);
        return response()->json($aspects);
    }

    public function store_json(Request $request)
    {
        // Penertiban::updateOrCreate([
        // // Product::update([
        //     'id' => $request->id
        // ],
        // [
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'kelurahan' => $request->kelurahan,
        //     'kecamatan' => $request->kecamatan,
        //     'jenis_id' => $request->jenis_id,
        //     'tahapan_id' => $request->tahapan_id,
        // ]);
        if ($request->hasFile('foto_dokumen')) {
            if (Storage::exists('public/foto_dokumen/'.$request->emp_foto_dokumen)) {
                Storage::delete('public/foto_dokumen/'.$request->emp_foto_dokumen);
            }
            $image = $request->file('foto_dokumen');
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->storeAs('public/foto_dokumen', $fileName);
        }else {
            $fileName = $request->emp_foto_dokumen;
        }
        if ($request->hasFile('foto_lapangan')) {
            if (Storage::exists('public/foto_lapangan/'.$request->emp_foto_lapangan)) {
                Storage::delete('public/foto_lapangan/'.$request->emp_foto_lapangan);
            }
            $image2 = $request->file('foto_lapangan');
            $fileName2 = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->storeAs('public/foto_lapangan', $fileName2);
        }else {
            $fileName2 = $request->emp_foto_lapangan;
        }
        // dd($request->all());
        // dd($request->id);
        if (Penertiban::where('id', $request->id)->exists()) {
            $penertiban = Penertiban::findOrFail($request->id);
            $penertiban->no_upt_imb = $request->no_upt_imb;
            $penertiban->sk_peringatan1 = $request->sk_peringatan1;
            $penertiban->tgl_sk_peringatan1 = $request->tgl_sk_peringatan1;
            $penertiban->sk_peringatan2 = $request->sk_peringatan2;
            $penertiban->tgl_sk_peringatan2 = $request->tgl_sk_peringatan2;
            $penertiban->sk_peringatan3 = $request->sk_peringatan3;
            $penertiban->tgl_sk_peringatan3 = $request->tgl_sk_peringatan3;
            $penertiban->sk_penyegelan = $request->sk_penyegelan;
            $penertiban->tgl_sk_penyegelan = $request->tgl_sk_penyegelan;
            $penertiban->sk_bantib_penyegelan = $request->sk_bantib_penyegelan;
            $penertiban->tgl_sk_bantib_penyegelan = $request->tgl_sk_bantib_penyegelan;
            $penertiban->sk_pembongkaran = $request->sk_pembongkaran;
            $penertiban->tgl_sk_pembongkaran = $request->tgl_sk_pembongkaran;
            $penertiban->sk_pembongkaran = $request->sk_pembongkaran;
            $penertiban->tgl_sk_bantib_pembongkaran = $request->tgl_sk_bantib_pembongkaran;
            $penertiban->alamat = $request->alamat;
            $penertiban->kelurahan = $request->kelurahan;
            $penertiban->kecamatan = $request->kecamatan;
            $penertiban->jenis = $request->jenis;
            $penertiban->tahapan = $request->tahapan;
            $penertiban->keterangan = $request->keterangan;
            $penertiban->latitude = $request->latitude;
            $penertiban->longitude = $request->longitude;
            $penertiban->foto_dokumen = $fileName;
            $penertiban->foto_lapangan = $fileName2;
            $penertiban->save();
        }else {
            Penertiban::create([
                'id' => Helper::IDGenerator(new Penertiban,'id',5),
                'no_upt_imb' => $request->no_upt_imb,
                'sk_peringatan1' => $request->sk_peringatan1,
                'tgl_sk_peringatan1' => $request->tgl_sk_peringatan1,
                'sk_peringatan2' => $request->sk_peringatan2,
                'tgl_sk_peringatan2' => $request->tgl_sk_peringatan2,
                'sk_peringatan3' => $request->sk_peringatan3,
                'tgl_sk_peringatan3' => $request->tgl_sk_peringatan3,
                'sk_penyegelan' => $request->sk_penyegelan,
                'tgl_sk_penyegelan' => $request->tgl_sk_penyegelan,
                'sk_bantib_penyegelan' => $request->sk_bantib_penyegelan,
                'tgl_sk_bantib_penyegelan' => $request->tgl_sk_bantib_penyegelan,
                'sk_pembongkaran' => $request->sk_pembongkaran,
                'tgl_sk_pembongkaran' => $request->tgl_sk_pembongkaran,
                'sk_pembongkaran' => $request->sk_pembongkaran,
                'tgl_sk_bantib_pembongkaran' => $request->tgl_sk_bantib_pembongkaran,
                'alamat' => $request->alamat,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'jenis' => $request->jenis,
                'tahapan' => $request->tahapan,
                'keterangan' => $request->keterangan,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'foto_dokumen' => $request->$fileName,
                'foto_lapangan' => $request->$fileName2,
            ]);
        }   

        return response()->json(['success'=>'Data Penertiban saved successfully.']);
    }
    public function delete_json($id)
    {
        Penertiban::find($id)->delete();
      
        return response()->json(['success'=>'Data Penertiban deleted successfully.']);
    }
    public function search_json(Request $request){
        // dd($request->all());
        if ($request->ajax()) {
            // dd($request->kolom);
            $data = Penertiban::select('*')->limit(10000);
            if ($request->kolom != '' && $request->nilai != '') {
                // dd($data->where("'$request->kolom'" == 1));
                // $data = $data->where($request->kolom, $request->nilai);
                $data = $data->where($request->kolom, 'LIKE', '%' . $request->nilai . '%');
                $count = $data->count();
                // dd($count);
            }
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        // $gid = $data->gid;
                        // dd($gid);
                        $view = route('show', $data);
                        $btn = '<input type="hidden" name="gid" id="gid" value="'.$data->gid.'">';
                        $btn = $btn . '<a href="'.$view.'" target="_blank" onclick="show_json('.$data->gid.')" data-gid="'.$data->gid.'" class="edit btn btn-info btn-sm mr-2 mb-2">
                        View
                        </a>';
                        $btn = $btn . '<a href="javascript:void(0)" onclick="edit_json('.$data->gid.')" data-gid="'.$data->gid.'" data-toggle="modal" data-target="#modal-lg" class="edit btn btn-primary btn-sm mr-2 mb-2">
                        Update
                        </a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        // return view('home2');
        return response()->json(['success'=>'Data Ditemukan.']);
    }
}
