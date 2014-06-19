<?php

class UserController extends BaseController {

    public function getOpt()
    {
        $opt = Input::get('opt');

        $date = date("Y-m-d H:i:s");

        
        return View::make('user')->with('date', $date);
        

//         return $opt;
        //return View::make('address');
    }
    
    public function addUser()
    {
        $name = Input::get('name');
        $address = Input::get('address');
        //$input = array($name, $address);
    
//         $result = DB::insert('insert into user (name, address) values (?, ?)', array($name, $address));
    
        DB::table('user')->insert( array('name' => $name, 'address' => $address));
        
        
        return 'success';
        //return View::make('address');
    }
    
    public function selectUser()
    {
    
        //$results = DB::select('select * from user where id = ?', array(1));
//         $results = DB::select('select * from user where address = ?', array('beijing'));
//         print_r($results);
        
        
//         $users = DB::table('user')->get();
        $users = DB::table('user')->where('address', 'shanghai')->get();
        print_r($users);
        
        
        
        //return View::make('address');
    }

}
