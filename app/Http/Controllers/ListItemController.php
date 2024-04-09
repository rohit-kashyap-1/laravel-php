<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listItem;

class ListItemController extends Controller
{
    //
    function Index(){
        return view('welcome',['listItems'=>listItem::where('is_completed',0)->get(),'finishedTasks'=>listItem::where('is_completed',1)->get()]);
    }
    function SaveTodo(Request $request){
       $listItem = new listItem;
       $listItem->name = $request->todo;
       $listItem->is_completed=0;
       $listItem->save();
       return redirect('/');
    }

    function Complete($id){
        $listItem = listItem::find($id);
        $listItem->is_completed =1;
        $listItem->save();
        return redirect('/'); 
    }

    
    function Delete($id){
        $listItem = listItem::find($id);
        $listItem->delete();
        return redirect('/'); 
    }
}
