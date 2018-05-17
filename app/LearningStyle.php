<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningStyle extends Model
{
   protected $table = 'learning_styles';

   protected $fillable = array(
      'campus',
      'ca',
      'ec',
      'ea',
      '_or',
      'ca_ec',
      'ea_or',
      'style'
   );
}
