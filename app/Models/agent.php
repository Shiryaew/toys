<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agent extends Model
{
    use HasFactory;
	protected $table = 'agent';
	public $timestamp = false;
	protected $primaryKey = 'ID';
	protected $fillable = ['ID','Title','AgentTypeID','Address','INN','KPP','DirectorName','Phone','Email','Priority'];
}
