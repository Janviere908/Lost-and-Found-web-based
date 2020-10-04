<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    use HasFactory;

    protected $fillable =['type'];

    function found_documents(){

    return $this->hasMany('App\Models\FoundDocument');
    }


    function lost_documents(){

        return $this->hasMany('App\Models\LostDocument');
        }
}
