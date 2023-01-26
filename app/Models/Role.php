<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'company_id',
    ];

    public function employees(){
        return $this->hashMany(Employee::class);
    }

    public function responsibility(){
        return $this->hashMany(Responsibility::class);
    }
    
    public function company(){
        return $this->belongsToMany(Company::class);
    }
}
