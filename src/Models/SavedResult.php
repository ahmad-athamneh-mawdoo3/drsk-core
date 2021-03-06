<?php

namespace Mawdoo3\Drsk\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SavedResult extends Model
{
        use SoftDeletes;
    protected $fillable = ['title','description','link','comment'];

}
