<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(course::class);
    } 
    public function seminar()
    {
        return $this->belongsTo(seminar::class);
    }
}
