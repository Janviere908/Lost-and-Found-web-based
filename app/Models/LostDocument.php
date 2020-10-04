<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostDocument extends Model
{
    use HasFactory;

    protected   $fillable= ['document_number','document_type_id','user_id','found','received'];
    function document_type()
    {

        return $this->belongsTo('App\Models\DocumentType');

    }

    function user()
    {

        return $this->belongsTo('App\Models\User');

    }

    
}
