<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lead extends Model
{
    use HasFactory;
    protected $table="SalesAreadb";
    protected $primaryKey="TransId";
    public $timestamps = false;
    public $incrementing = false;

}
