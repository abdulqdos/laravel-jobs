<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';

    protected $guarded = [];


    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class);
    }
}
