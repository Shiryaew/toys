<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productsale extends Model
{
    use HasFactory;
    protected $table = 'productsale';
    public $timestamp = false;
    protected $primaryKey = 'ID';
    protected $fillable = ['ID','AgentID','ProductID','SaleDate','ProductCount'];
}
