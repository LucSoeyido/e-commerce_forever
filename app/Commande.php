<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
     protected $fillable = [
       'designation','prix','logo','total','iduser','qte','reference',
    ];
}

