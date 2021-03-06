<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flama extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='flama';
    public $timestamp=true;
    protected $fillable=['id','value','feed_id'];
}
