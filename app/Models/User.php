<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
        'score_sleep_quality',
        'score_stress_quality',
    ];

    public function validate($request, $rules)
    {
        return $request->validate($rules);
    }
}
