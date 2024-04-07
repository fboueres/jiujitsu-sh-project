<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasUuids;
    
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'uuid';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cpf',
        'full_name',
        'gender',
        'birth_date',
        'enrollment_date',
        'email',
        'phone_number',
        'is_paying',
    ];

    /**
     * The address of the student.
     */
    public function address()
    {
        return $this->hasOne(StudentAddress::class);
    }

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return ['enrollment_date' => 'timestamp',];
    }
}
