<?php



namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\LostDocument;
use App\Models\FoundDocument;
use App\Models\User;
use App\Models\DocumentType;
use Auth;


class LostDocumentController extends Controller
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
        $lost_documents=LostDocument::all();
        

        return view('user.lost-document.index',['lost_documents'=>$lost_documents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $document_types=DocumentType::all();
        return view('user.lost-document.create',['document_types'=>$document_types]);
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

            'document_type'=>'required',
            'document_number'=>'required',
           

        ]);

        $lostDocument= new LostDocument;

        $lostDocument->document_type_id=$request->document_type;
        $lostDocument->document_number=$request->document_number;
        $lostDocument->user_id=Auth::user()->id;

        $lostDocument->save();

        return redirect()->route('lost_documents.index')->with('success',"Lost document reported.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document_types=DocumentType::all();
        $document=LostDocument::find($id);

        
       return view('user.lost-document.show',['document_types'=>$document_types,'document'=>$document]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document_types=DocumentType::all();
        $document=LostDocument::find($id);

        
       return view('user.lost-document.edit',['document_types'=>$document_types,'document'=>$document]);
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
        $request->validate([

            'document_type'=>'required',
            'document_number'=>'required',
           

        ]);



        $lostDocument=LostDocument::find($id);

        $lostDocument->document_type_id=$request->document_type;
        $lostDocument->document_number=$request->document_number;
        $lostDocument->user_id=Auth::user()->id;

        $lostDocument->save();

        return redirect()->route('lost_documents.index')->with('success',"Lost document updated.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lostDocument=LostDocument::find($id);
        $lostDocument->delete();
        return redirect()->back()->with('success','Document deleted.' );
    }
}
