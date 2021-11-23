<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class Gallery extends Model
{
    use HasFactory, HasKey;

    const  TRUE_STATUS = true;
    const FALSE_STATUS = false;

    protected $fillable = [
        'picture',
        'status'
    ];
}
