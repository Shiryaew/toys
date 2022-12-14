<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenttype extends Model
{
    use HasFactory;
    protected $table = 'agenttype';
    public $timestamp = false;
    protected $primaryKey = 'ID';
    protected $fillable = ['ID','Title','Image'];
}
