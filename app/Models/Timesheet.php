<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;
    public function location()
    {
        $this->belongsTo(Location::class);
    }
    public function project()
    {
        $this->belongsTo(Project::class);
    }
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
