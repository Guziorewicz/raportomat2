<?php

namespace App\Http\Controllers;
use App\Models\Raport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Response;

class RaportyController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$raporty = Raport::all();
        $lista = DB::table('lista')->get();
        

        $raporty = DB::table('raport')->get();
       


        return view ('Raporty.index', ['lista'=>$lista, 'raport'=>$raporty]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Raporty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        if(isset($_POST["Import"])){
  
            $filename=$_FILES["file"]["tmp_name"];    
            if($_FILES["file"]["size"] > 0){
                
             
             $zakres = 0;
            
              $row=1;
              $file = fopen($filename, "r");
            
              while (($getData = fgetcsv($file, 10000, ",")) !== FALSE){
                if ($row==1) {$nazwa = $getData[2];} 
                if ($row==3) {$zakres = $getData[0];}
                  
                  $row++;

            } 
            $id=DB::table('lista')->insertGetId([
                'nazwa' => "$nazwa",
                'zakres' => "$zakres"]);
                
                $row=1;
                $file = fopen($filename, "r");
                while (($getData = fgetcsv($file, 10000, ",")) !== FALSE){
                    $row++;
                    if ($row>=8) {
                       $request = DB::table('raport')->insert([
                            'report_id' => "$id",
                            'call_time' => "$getData[0]",
                            'caller_id' => "$getData[1]",
                            'destination' => "$getData[3]",
                            'status' => "$getData[4]",
                            'ringing' => "$getData[5]",
                            'talking' => "$getData[6]",
                            'totals' => "$getData[7]",
                            'cost' => "$getData[8]",
                            'reason' => "$getData[9]",
                            'play' => "$getData[10]" ,
                            'active' => "1" 
                            
                        ]);
                        
                    }   
                    
                }
               
                
              fclose($file); 
                  
          }
        }
       
   
       return redirect()->route('raporty.index')->with('message', 'raport dodany');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $raporty = DB::table('raport')->where('report_id', "$id")->get();
       

        return view('Raporty.single', ['raport'=>$raporty]);
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
        //
    }
}
