<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Relations;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class juzerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role=Auth::user()->role;

        $lista = Db::table('users')
        ->get();
        
        $listaAdmin = DB::table('users')
        ->get()
        ->where("role", '1');

        $listaUser = DB::table('users')
        ->get()
        ->where("role", '0');

        $moduly = DB::table('modules')
        ->get();
            
            if ($role=='1'){
                
                return view('admin.dashboard',['listaAdmin'=>$listaAdmin,'listaUser'=>$listaUser, 'moduly'=>$moduly, 'lista'=>$lista]);
            } else {
                
                
                return view ('dashboard',['listaUser'=>$listaUser]);
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $juzer = User::find($id);
        $daneUsera = DB::table('relacje')
        ->select('users.name', 'modules.name', 'types.type')
        ->JOIN('types', 'relacje.id_type', '=', 'types.id')
        ->JOIN('modules', 'relacje.id_modul','=', 'modules.id')
        ->join('users', 'relacje.id_user', '=', 'users.id')
        ->where('users.id', '=', "$id")
        ->get();
        return view('admin.show', compact('juzer'), ['daneUsera'=>$daneUsera]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $user = User::find($id);
       return view('admin.editUser', compact('user'));

    }
    public function editModule($id)
    {
       $userModule = User::find($id);
       $daneModuly = DB::table('relacje')
       ->select('users.name', 'modules.name', 'types.type')
       ->JOIN('types', 'relacje.id_type', '=', 'types.id')
       ->JOIN('modules', 'relacje.id_modul','=', 'modules.id')
       ->join('users', 'relacje.id_user', '=', 'users.id')
       ->where('users.id', '=', "$id")
       ->get();
       $types = DB::table('types')
       ->get();
       return view('admin.editModule', compact('userModule'), ['daneModuly' => $daneModuly, 'types' => $types]);

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
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        
        return redirect('redirects');
        
    }

    public function updateModule(Request $request, $id)
    {
        $type = Relations::find($id);
        $type->id_type = $request->id;

        $type->save();

        return redirect('admin.editModule');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
