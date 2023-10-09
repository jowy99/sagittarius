<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    protected $guarded = [
        'id',
    ];
    protected $casts = [
        'name' => 'encrypted',
        'surname' => 'encrypted',
        'email' => 'encrypted',
    ];

}
