<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opinions extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $casts = ['email' => 'encrypted'];

    public function count(): int
    {
        return self::query()->count();
    }
}
