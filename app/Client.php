<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Attribute;

class Client extends Model
{
    // protected $fillable = ['name', 'email', 'status'];
    protected $guarded = [];

    protected $attributes = [
        'status' => 0
    ];

    public function scopeStatus($query)
    {
        return $query->where('status', 1)->get();
    }

    public function entreprise()
    {
        return $this->belongsTo('App\Entreprise');
    }

    public function getStatusAttribute($attributes)
    {
        return $this->getStatusOptions()[$attributes];
    }

    public function getStatusOptions()
    {
        return[
            '0' => 'Inactif',
            '1' => 'Actif',
            '2' => 'En attente'
        ];
    }
}
