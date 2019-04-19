<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pick extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'picks';

    /**
     * Get the character associated with the pick.
     */
    public function character()
    {
        return $this->belongsTo('App\Character', 'character_id');
    }

}
