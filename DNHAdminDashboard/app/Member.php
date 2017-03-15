<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
  protected $fillable = [
    'id', 'voornaam', 'tussenvoegsel', 'achternaam', 'email', 'woonplaats',
];
}
