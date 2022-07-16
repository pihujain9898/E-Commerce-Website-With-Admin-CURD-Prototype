<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class AdminController extends Controller

{
    public function adminDashboard($table_name = 'users'){
        if (Session()->get('u_type')==1){
            $tables_array = (array) null;
            $tables = DB::select('SHOW TABLES');
            foreach($tables as $key => $table){
                if(($table->Tables_in_krtya=="failed_jobs" || $table->Tables_in_krtya=="migrations" || $table->Tables_in_krtya=="password_resets" || $table->Tables_in_krtya=="personal_access_tokens"))
                    unset($tables[$key]);
                else{
                    $temp = DB::select('SELECT * FROM '.$table->Tables_in_krtya);
                    $tables_array[$table->Tables_in_krtya] = $temp;
                }
            }
    
            $tables_array['tables'] = $tables;
            if (!array_key_exists($table_name,$tables_array))
                $table_name="users";
            
            $data = compact('tables_array', 'table_name');
            return view('admin')->with($data);
        }
        return view('home');
    }
    public function database($table_name = 'users'){
        if (Session()->get('u_type')==1){
            $tables_array = (array) null;
            $tables = DB::select('SHOW TABLES');
            foreach($tables as $key => $table){
                if(($table->Tables_in_krtya=="failed_jobs" || $table->Tables_in_krtya=="migrations" || $table->Tables_in_krtya=="password_resets" || $table->Tables_in_krtya=="personal_access_tokens"))
                    unset($tables[$key]);
                else{
                    $temp = DB::select('SELECT * FROM '.$table->Tables_in_krtya);
                    $tables_array[$table->Tables_in_krtya] = $temp;
                }
            }
    
            $tables_array['tables'] = $tables;
            if (!array_key_exists($table_name,$tables_array))
                $table_name="users";
            
            $data = compact('tables_array', 'table_name');
            return view('database')->with($data);
        }
        return view('home');
    }

    public function delete(Request $req){
        $delete_data = explode("&", $req->delete);
        DB::table($delete_data[0])->where($delete_data[1], $delete_data[2])->delete();
        return redirect('/database/'.$delete_data[0]);
    }

    public function update(Request $req){
        $table_name = $req->table;
        $table = app("App\\Models\\".ucfirst($table_name));
        $idname = $table->getKeyName();
        $idvalue =  $req->$idname;
        foreach(array_slice($req->toArray(),2, count($req->toArray())-3) as $property_name => $proerty_value){
            if(!is_null($proerty_value)){
                DB::table($table_name)
                ->where($idname, $idvalue)
                ->update([$property_name => $proerty_value]);
            }
        }
        return redirect('/database/'.$table_name);
    }

    public function insert(Request $req){
        $table_name = $req->table;
        $table = app("App\\Models\\".ucfirst($table_name));
        $req = array_slice($req->toArray(),2, count($req->toArray())-5);
        // if(arra) $req
        // $req['password'] = md5($req['password']);
        DB::table($table_name)->insert($req);
        return redirect('/database/'.$table_name);
    }
}
