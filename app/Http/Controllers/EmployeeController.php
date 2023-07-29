<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Jabatan;
use App\Models\JenisKelamin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::paginate(10);
        $jabatan = Jabatan::all();
        $jenis = JenisKelamin::all();
        return view('index', compact('employee', 'jabatan', 'jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute Harus Diisi',
            'max' => 'attribute Max max Character',
            'numeric' => ':attribute Must Numbers'
        ];

        $this->validate($request, [
            'nama_pegawai' => 'required|max:30',
            'jabatan_id' => 'required',
            'jk_id' => 'required',
            'alamat' => 'required'
        ], $message);

        Employee::create([
            'nama_pegawai' => $request->nama_pegawai,
            'jabatan_id' => $request->jabatan_id,
            'jk_id' => $request->jk_id,
            'alamat' => $request->alamat,
        ]);

        Session::flash('add', 'Berhasil Menambahkan Pegawai Baru');
        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employee::paginate(10);
        $employee = Employee::find($id);    
        return view('index', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        // return $request;

        $message = [
            'required' => ':attribute Must be Filled',
            'max' => 'attribute Max :max Character',
            'min' => 'attribute Min :min Character',
            'numeric' => ':attribute Must be Numbers',
        ];

        $this->validate($request, [
            'nama_pegawai' => 'required|max:30',
            'jabatan_id' => 'required',
            'jk_id' => 'required',
            'alamat' => 'required'
        ]);

        $employee = Employee::find($id);
        $employee->nama_pegawai = $request->nama_pegawai;
        $employee->jabatan_id = $request->jabatan_id;
        $employee->jk_id = $request->jk_id;
        $employee->alamat = $request->alamat;

        $employee->save();
        Session::flash('edit', 'Data Pegawai Berhasil di Edit');
        return redirect('/employee');
        // return $request->nama_pegawai;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }

    public function hapus($id)
    {
        Employee::find($id)->delete();
        Session::flash('delete', 'Data Pegawai Dihapus');
        return redirect('/');
    }

    public function search()
    {
        $jabatan = Jabatan::all();
        $jenis = JenisKelamin::all();
        $search_text = $_GET['form'];
        $employee = Employee::where('nama_pegawai', 'LIKE', '%' . $search_text . '%')->paginate(15);
        $jk = JenisKelamin::where('jenis_kelamin', 'LIKE', '%' . $search_text . '%')->get();

        return view('search', compact('employee', 'jabatan', 'jenis', 'jk'));
    }
}
