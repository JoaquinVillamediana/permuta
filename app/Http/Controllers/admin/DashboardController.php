<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\User;
use DateTime;
use DB;

use Auth;



// use App\Models\UsersLawyersTypesModel;

use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $CantUsers = User::where('user_type','!=',0)->count();
        $aUsers = User::where('deleted_at',NULL)->get();

        $aDataGraph=array();
        $aFcard= DB::select('SELECT count(*) as users, DATE(users.created_at) as fecha FROM users GROUP BY DATE(users.created_at)');
        foreach($aFcard as $row){
            $data = array("label" => $row->fecha , "y" => floatval($row->users));

            array_push($aDataGraph,$data);
        }

        $aDataGraphProv=array();
       
        $aUsersxProv = DB::select('SELECT COUNT(u.id) AS cantidad, pr.name as prov 
        FROM provinces_arg pr 
        LEFT JOIN users u
        ON pr.id = u.province_id 
        group by pr.id');

        foreach($aUsersxProv as $row){
            
         
            $data = array("label" => strval($row->prov) , "y" => floatval($row->cantidad));
            array_push($aDataGraphProv,$data);
        }

    
      
    

        return view('admin/dashboard.index',compact('CantUsers','aUsers','aDataGraph','aDataGraphProv'));
    }
 
}
