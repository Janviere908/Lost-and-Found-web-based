<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\LostDocument;
use App\Models\FoundDocument;
use App\Models\User;
use App\Models\DocumentType;
use App\Notifications\DocumentFoundNotification;
use Auth;
use App\models\Invoice;


class FoundDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $found_documents=Auth::user()->found_documents;


        return view('user.found-document.index',['found_documents'=>$found_documents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $document_types=DocumentType::all();
        $lostDocuments=lostDocument::where('found', 0)->get();
        return view('user.found-document.create',['document_types'=>$document_types,'lostDocuments'=>$lostDocuments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
            'lost_document'=>'required',
            
           
            'picture'=>'required|image',
           
            
            
         
   
           ]);

          


             $picture = time().'.'.$request->picture->extension();  

   

            
             $request->picture->storeAs('found_documents',$picture, 'public');

             $lostDocument=LostDocument::find($request->lost_document);
             
              $lostDocument->found=1;
              $lostDocument->save();

              $document= new FoundDocument;
           
                  $document->document_number=$lostDocument->document_number;
                 $document->lost_document_id=$lostDocument->id;
               $document->document_type_id=$lostDocument->document_type_id;
                   $document->user_id=Auth::user()->id;
               $document->picture=$picture;
            
                   $document->save();

                  //notify user by email

                   $data =['document_number'=>$lostDocument->document_number,'lost_document_id'=>$lostDocument->id];
                   

                  $lostDocument->user->notify(new DocumentFoundNotification($data));

              //create invoice
              
              $invoice= new Invoice;

              $invoice->totalAmount=5;
              $invoice->paid=0;
              $invoice->user_id=$lostDocument->user->id;
              $invoice->lost_document_id=$lostDocument->id;
              $invoice->found_document_id=$document->id;

              $invoice->save();
             


            //$checkLostDocument= LostDocument::where('document_number', $request->document_number)->get();



          /**    if($checkLostDocument->count()>0){


             *   foreach($checkLostDocument as $lostDocument){

             *       $lostDocument->found=1;
              *      $lostDocument->save();
                *    $document= new FoundDocument;
           *
            *        $document->document_number=$request->document_number;
            *        $document->lost_document_id=$lostDocument->id;
            *        $document->document_type_id=$request->document_type;
            *        $document->user_id=Auth::user()->id;
            *        $document->picture=$picture;
            *        
            *        $document->save();

            *        //notify user by email

             *       $data =['document_number'=>$lostDocument->document_number,'lost_document_id'=>$lostDocument->id];
                   

             *       $lostDocument->user->notify(new DocumentFoundNotification($data));

                   
               * }
          *  }

          
        *else{
         
         *   $document= new FoundDocument;
           
         *  $document->document_number=$request->document_number;
          * $document->document_type_id=$request->document_type;
          * $document->user_id=Auth::user()->id;
         *  $document->picture=$picture;
           
         *  $document->save();

        *}
        */
   
           return redirect()->route('found_documents.index')->with('success', 'Found document reported');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
