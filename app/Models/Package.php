<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['name', 'content', 'image'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
