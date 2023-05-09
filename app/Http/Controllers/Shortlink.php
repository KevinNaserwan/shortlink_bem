<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Shortlink_m;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;

class Shortlink extends Controller
{

    public function index()
    {
        // $link = DB::table('links')->get();
        // dd($link);

        //show
        // $link = Link::all();
        // dd($link);

        // DB::table('links')->insert([
        //     'nama' => 'query builder',
        //     'link' => 'https:://www.google.com',
        //     'dinas' => '1'
        // ]);

        //insert
        // Link::create([
        //     'nama' => 'eloquent',
        //     'link' => 'https:://www.google.com',
        //     'dinas' => '0'
        // ]);

        // DB::table('links')->where('nama', 'eloquent')->update((['nama' => 'eloquent2']));

        //update
        // Link::findOrFail(3)->update([
        //     'nama' => 'eloquent2'
        // ]);

        // DB::table('links')->where('id', 3)->delete();

        //delete
        // Link::find(2)->delete();

        // $aaa = collect($nilai)->contains(function ($value) {
        //     return $value < 6;
        // });

        // $aaa = collect($nilai2)->diff($nilai);

        // $aaa = collect($nilai2)->filter(function ($value) {
        //     return $value > 5;
        // });

        // $aaa = Link::all()->pluck('link');


        // $aaa = collect($nilai2)->map(function ($value) {
        //     return $value * 2;
        // });
    }

    public function show()
    {
        $nilai_link = Link::all();
        return view("Shortlink/index", ['nilai_link' => $nilai_link]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nilai_link' => 'required|unique:links'
        ], [
            'nama.required' => 'nama harus diisi',
            'nilai_link.required' => 'link harus diisi',
            'nilai_link.unique' => 'Link sudah pernah dipakai'
        ]);

        $data = [
            'nama' => $request->input('nama'),
            'nilai_link' => $request->input('nilai_link'),
            'dinas' => Session('dinas')
        ];

        Link::create($data);
        return redirect('link')->with('Success', 'Berhasil membuat shortlink');
    }

    public function linkshort($id)
    {
        $find = Link::where('id', $id)->first();
        return redirect($find->nilai_link);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nilai_link' => 'required|unique:links'
        ], [
            'nama.required' => 'nama harus diisi',
            'nilai_link.required' => 'link harus diisi',
            'nilai_link.unique' => 'Link sudah pernah dipakai'
        ]);

        $data = [
            'nama' => $request->input('nama'),
            'nilai_link' => $request->input('nilai_link'),
            'dinas' => Session('dinas')
        ];

        Link::where('id', $id)->update($data);
        return redirect('/link')->with('Success', 'Berhasil update shortlink');
    }

    public function delete($id)
    {
        DB::table('links')->where('id', $id)->delete();
        return redirect('link')->with('status', 'Shortlink berhasil dihapus');
    }
}
