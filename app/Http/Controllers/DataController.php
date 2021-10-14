<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataController extends Controller
{
    
    public function index()
    {
        $user = User::orderBy('id' , 'ASC')->simplePaginate(3);
        return view('v1.crud.tableUsers', ['user' => $user]);
    }

   
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make( $request->password);
        $user->save();
        return redirect('tableUsers');
    }
    
    public function updateRead($id)
    {
       $user = User::find($id);
       return view('v1.crud.updateUsers', ['user' => $user]);
    }
   
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        if($request->name != ''){
            $user->name = $request->name;
        }
        if($request->email != ''){
            $user->email = $request->email;
        }
        if($user->password != $request->password && $request->password != '') {
            $user->password = Hash::make( $request->password);
        }

        $user->save();
        return redirect('tableUsers');
                

    }
 
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('tableUsers');
    }
}
