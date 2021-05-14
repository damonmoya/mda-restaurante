<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Mesa;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Reserva::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ////required|date|before_or_equal:today
        $data = request()->validate([
            'date' => ['required', 'date', 'after_or_equal:today'],
            'time' => ['required'],
            'table' => ['required'],
            'comments' => ['max:500'],
            ], [
            'name.required' => 'El campo fecha es obligatorio',
            'name.date' => 'La fecha no es valida',
            'name.after_or_equal' => 'La fecha tiene que ser posterior o igual al dia de hoy',
            'time.required' => 'El campo hora es obligatorio',
            'table.required' => 'El campo mesa es obligatorio',
            'comments.max' => 'El campo comentario no puede tener mas de 500 caracteres',
        ]);

        $reserva = new Reserva();
        $reserva->idClient = auth()->user()->id;
        $reserva->idTable = $request->idTable;
        $reserva->date = $request->date;
        $reserva->save();
        
        $res = DB::table('reservas_mesas')->where('date', $request->date)->where('idTable', $request->idTable)->first();
        $time = $request->time;

        if ($res == null) {
            DB::table('reservas_mesas')->insert([
                'idBook' => $reserva->idReservation,
                'idTable' => $request->idTable,
                'date' => $request->date,
                $time => 1
            ]);
        } else {
            DB::table('reservas_mesas')->where('date', $request->date)->where('idTable', $request->idTable)->update([$time => 1]);
            //$res->update();
        }
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Reserva::findOrFail($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Reserva::findOrFail($id);
        $book->delete();
        return redirect()->route('books.index');
    }

    public function getBooks($date, $diners) {
        $horas_libres = array();
        $final = array();
        $res = DB::table('reservas_mesas')->join('mesas', 'mesas.idTable', 'reservas_mesas.idTable')->where('capacity', $diners)->where('date', $date)->get();
        // dd($res);
        //$res = Reserva::where('date', $date)->get();
        if (count($res->toArray()) == 0) {
            $final[0] = ['12:00-13:00', '13:00-14:00', '14:00-15:00', '15:00-16:00', '20:00-21:00', '21:00-22:00', '22:00-23:00', '23:00-00:00'];
            $final[1] = Mesa::firstWhere('capacity', $diners)->idTable;
        } else {
            $found = false;
            $aux = array();
            $table = null;
            $tableAux = null;
            foreach (($res->toArray()) as $field => $record) {

                foreach ($record as $field => $value) {
                    // dd($res->toArray());
                    if ($value == 0) {
                        array_push($aux, $field);                        
                    }
                    if ($field == 'idTable') {
                        $tableAux = $value;
                    }
                }

                if (count($aux) > count($horas_libres) ) {
                    $horas_libres = $aux;
                    $table = $tableAux;
                }

                $aux = array();
                
            }

            if (count($horas_libres) < 1){
                $tablesIDs = DB::table('reservas_mesas')->pluck('idTable')->all();
                $final[1] = Mesa::whereNotIn('idTable', $tablesIDs)->where('capacity', $diners)->first();
                // dd($final[1]);
                if ($final[1] == null){
                    $final[0] = ['No hay horas disponibles'];
                } else {
                    $final[0] = ['12:00-13:00', '13:00-14:00', '14:00-15:00', '15:00-16:00', '20:00-21:00', '21:00-22:00', '22:00-23:00', '23:00-00:00'];
                    $final[1] = $final[1]->idTable;
                }
            } else {
                $final[0] = $horas_libres;
                $final[1] = $table;
            }
            
        }
        return response()->json($final, 200);
    }

    public function getFreeTables() {
    }
}
