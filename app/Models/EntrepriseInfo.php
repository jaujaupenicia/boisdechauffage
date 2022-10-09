<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property string $heure_ouverture
 * @property string $heure_fermerture
 * @property string $addresse
 * @property string $email_support
 * @property string $telephone
 * @property string $lien_support_whatsapp
 * @property string $created_at
 * @property string $updated_at
 */
class EntrepriseInfo extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nom', 'heure_ouverture', 'heure_fermerture', 'addresse', 'email_support', 'telephone', 'lien_support_whatsapp', 'created_at', 'updated_at'];
}
