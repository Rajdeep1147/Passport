<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeDetails extends Model
{
    use HasFactory,SoftDeletes;

    public $fillable = ['address','city','state','zip','salary','role','department'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
