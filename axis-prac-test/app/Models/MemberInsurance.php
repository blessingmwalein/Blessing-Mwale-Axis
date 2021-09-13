<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberInsurance extends Model
{
    use HasFactory;
    protected $guarded;

    public function member()
    {
        return $this->belongsTo(Member::class);

    }
    public function insurance()
    {
        return $this->belongsTo(Insurance::class);

    }
}
