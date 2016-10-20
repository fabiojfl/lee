<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id','aniversario','sexo','telefone'];

    public function user()
    {
        return $this->belongsTo('CodeCommerce\User');
    }

}
