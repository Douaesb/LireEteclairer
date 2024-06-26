<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'etat',
        'date_creation',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function articles()
{
    return $this->belongsToMany(Article::class, 'commandes')
                ->withPivot(['quantity', 'id', 'etat'])
                ->withTimestamps();
}

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
}
