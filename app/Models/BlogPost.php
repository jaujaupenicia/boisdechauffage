<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $titre
 * @property string $contenu
 * @property string $created_at
 * @property string $updated_at
 */
class BlogPost extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['titre', 'contenu', 'created_at', 'updated_at'];
}
