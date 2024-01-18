<?php
// app/Models/Page.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [ 'content', 'heading1', 'heading2', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
