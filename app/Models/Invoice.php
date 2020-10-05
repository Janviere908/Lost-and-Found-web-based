<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected   $fillable= ['lost_document_id','paid', 'totalAmount', 'found_document_id'];
    function lost_document()
    {

        return $this->belongsTo('App\Models\LostDocument');

    }


    function found_document()
    {

        return $this->belongsTo('App\Models\FoundDocument');

    }

    function user()
    {

        return $this->belongsTo('App\Models\User');

    }
}
