<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDeadPeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $dead = [
            'Cersei Lannister',
            'Jamie Lannister',
            'Daeneris Targaryen',
            'The Hound',
            'The Mountain',
            'Lord Varys',
            'Euron Greyjoy',

        ];
        Character::whereIn('name', $dead)
            ->update(['status' => 'dead', 'updated_at' => date('Y-m-d H:i:s')]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
