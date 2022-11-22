<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    public $timestamp = false;
    protected $primaryKey = 'ID';
    protected $fillable = ['ID','Title','ProductTypeID','ArticleNumber','Description','Image','ProductionPersonCount','ProductionWorkshopNumber','MinCostForAgent'];

    public function ProdType()
    {
       // return $this->hasOne('App\Models\producttype', 'ID' );
    }
}
