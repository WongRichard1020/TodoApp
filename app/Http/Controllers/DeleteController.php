<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function destroyTitle(Request $request)
    {
        $request_details = $request->all();
        $todo_id = $request_details['id'];

        $query = Todo::findOrFail($todo_id)->delete();

        if(!$query) {
            return response()->json(['code'=>0,'msg'=>'Something went wrong']);
        } else {
            return response()->json(['code'=>1,'msg'=>'Deleted successfully']);
        }

        return redirect('/');
    }
}
