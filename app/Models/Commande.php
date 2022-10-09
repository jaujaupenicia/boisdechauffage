<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $client_id
 * @property integer $article_id
 * @property string $identifiant_cmd
 * @property string $date_commande
 * @property integer $qte_commande
 * @property string $addresse_livraison
 * @property string $commentaire
 * @property string $created_at
 * @property string $updated_at
 * @property Client $client
 * @property Article $article
 */
class Commande extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['client_id', 'article_id', 'identifiant_cmd', 'date_commande', 'qte_commande', 'addresse_livraison', 'commentaire', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }
}
