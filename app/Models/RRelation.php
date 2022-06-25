<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RRelation extends Model
{
    use HasFactory;

    protected $table = 'review_relations';
    protected $guarded = [];
}
