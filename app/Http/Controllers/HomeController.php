<?php  namespace App\Http\Controllers; 
 use Illuminate\Http\Request; 
 class HomeController extends Controller 
{     public function index() 
    { 
      //  $data = [ 
        //    'nama' => 'Enting Marpaung', 
          //  'pekerjaan' => 'Developer', 
            // 'alamat' => 'kanling'
        //]; 
        // return view('home')->with($data); 
        $nama = "Enting Marpaung"; 
        $pekerjaan = "developer"; 
        $alamat = "kavling";
        return view('home', compact('nama', 'pekerjaan', 'alamat')); 
    } 
    public function contact() 
    {         return view('contact'); 
    } 
} 
