<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property string $description
 * @property float $prix
 * @property boolean $en_promo
 * @property integer $stock_dispo
 * @property float $prix_promo
 * @property string $image_article
 * @property string $created_at
 * @property string $updated_at
 * @property Commande[] $commandes
 */
class Article extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['nom', 'description', 'prix', 'en_promo', 'stock_dispo', 'prix_promo', 'image_article', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commandes()
    {
        return $this->hasMany('App\Models\Commande');
    }
}
