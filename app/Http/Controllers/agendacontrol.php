<?php

namespace App\Http\Controllers;

use App\agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class agendacontrol extends Controller
{
    public function showagenda()
    {
        $agenda = DB::table('agenda')->orderBy('status', 'desc')->get();
        return view('admin.agenda', array('user' => Auth::user()))
            ->with('agendas', $agenda);
    }

    public function showtambahagenda()
    {
        return view('admin.tambahagenda', array('user' => Auth::user()));
    }

    public function tambahagenda(Request $request)
    {
        $name = $request->input('agenda');
        $tanggalmulai = $request->input('tanggalmulai');
        $tanggalselesai = $request->input('tanggalselesai');
        $alamat = $request->input('alamat');
        $start = $request->input('start');
        $end = $request->input('end');
        $desc = $request->input('desc_agenda');

        $agenda = new agenda();
        $agenda->nama_agenda = $name;
        $agenda->tanggalmulai = $tanggalmulai;
        $agenda->tanggalselesai = $tanggalselesai;
        $agenda->start = $start;
        $agenda->end = $end;
        $agenda->alamat = $alamat;
        $agenda->status = 'on going';
        $agenda->desc_agenda = $desc;
        $agenda->save();
        return redirect('/administrator/agenda');
    }

    public function deleteagenda($id)
    {
        DB::table('agenda')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function showeditagenda($id)
    {
        $agenda = DB::table('agenda')->where('id', $id)->get();
        return view('admin.editagenda', array('user' => Auth::user()))
            ->with('agendas', $agenda);
    }

    public function edit(Request $request, $id)
    {
        $name = $request->input('agenda');
        $tanggalmulai = $request->input('tanggalmulai');
        $tanggalselesai = $request->input('tanggalselesai');
        $status = $request->input('status');
        $start = $request->input('start');
        $end = $request->input('end');
        $desc = $request->input('desc_agenda');

        DB::table('agenda')->where('id', $id)->update([
            'nama_agenda' => $name,
            'tanggalmulai' => $tanggalmulai,
            'tanggalselesai' => $tanggalselesai,
            'status' => $status,
            'start'=>$start,
            'end'=>$end,
            'desc_agenda'=>$desc]);

        return redirect('/administrator/agenda');
    }
}
