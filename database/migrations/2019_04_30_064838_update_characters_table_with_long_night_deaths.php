<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Character;

class UpdateCharactersTableWithLongNightDeaths extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $dead = ['Theon Greyjoy', 'Melissandre', 'Jorah Mormont', 'Berick Dondarrion'];
        Character::whereIn('name', $dead)->update(['status' => 'dead', 'updated_at' => date('Y-m-d H:i:s')]);
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
