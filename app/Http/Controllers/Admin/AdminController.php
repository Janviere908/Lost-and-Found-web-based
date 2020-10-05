<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\FoundDocument;
use App\Models\LostDocument;

class AdminController extends Controller
{  public function __construct()
   {
       $this->middleware('auth');
   }
   function index(){
      $foundDocuments=FoundDocument::all()->count();
      $lostDocuments=LostDocument::all()->count();
      return view('admin.admin.index',['foundDocuments'=>$foundDocuments,'lostDocuments'=>$lostDocuments]);

    
   }
}
