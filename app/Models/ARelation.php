<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ARelation extends Model
{
    use HasFactory;

    protected $table = 'author_relations';
    protected $guarded = [];
}
