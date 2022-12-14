<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producttype extends Model
{
    use HasFactory;
    protected $table = 'producttype';
    public $timestamp = false;
    protected $primaryKey = 'ID';
    protected $fillable = ['ID','Title','DefectedPercent'];
}
