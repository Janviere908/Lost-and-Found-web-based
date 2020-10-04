<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundDocument extends Model
{
    use HasFactory;

 protected   $fillable= ['picture','document_number','document_type_id','user_id','received'];
    function document_type()
    {

        return $this->belongsTo('App\Models\DocumentType');

    }

    function user()
    {

        return $this->belongsTo('App\Models\User');

    }
}
