<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HtgModel extends Model
{
    use HasFactory;

    protected $table = 'htg_clock_in';

    protected $fillable = ['user_id','clock_in','clock_out','date'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
