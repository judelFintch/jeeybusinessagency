<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class Valve extends Model
{
    use HasFactory, HasKey;

    protected $fillable = [
        'title',
        'files'
    ];
}
