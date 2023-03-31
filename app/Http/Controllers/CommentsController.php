<?php

namespace App\Http\Controllers;
use App\Models\CommentsModel;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function showComments(){
        $comments=CommentsModel::all();
        return view('admin.comments',compact('comments'));
    }
}
