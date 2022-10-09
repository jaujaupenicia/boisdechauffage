<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property integer $id
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $telephone
 * @property string $adresse
 * @property string $password
 * @property string $lien_whatsapp
 * @property string $created_at
 * @property string $updated_at
 * @property Commande[] $commandes
 */
class Client extends Authenticatable
{
    /**
     * @var array
     */
    protected $fillable = ['nom', 'prenom', 'email', 'telephone', 'adresse', 'password', 'lien_whatsapp', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commandes()
    {
        return $this->hasMany('App\Models\Commande');
    }

    public function lancerCommande (Request $request) {
        $cart = session()->get('cart');

        foreach ($cart as $key => $article) {
            $produit = Article::find($key);
            $produit->update([ "stock_dispo" => $produit->stock_dispo - $article['quantity']]);
            $this->update(["adresse" => $request->address, "telephone" => $request->tel]);
            $this->commandes()->create([
                "article_id" => $produit->id,
                "identifiant_cmd" => "cld_". $this->id,
                "date_commande" => now(),
                "qte_commande" => $article['quantity'],
                "addresse_livraison" => $request->addressLivraison
            ]);
        }

        $cart = session()->put('cart', null);


    }
}
