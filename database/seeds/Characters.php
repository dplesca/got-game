<?php

use Illuminate\Database\Seeder;
use App\Character;

class Characters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = [
            'Jon Snow',
            'Sansa Stark',
            'Arya Stark',
            'Bran Stark',
            'Cersei Lannister',
            'Jamie Lannister',
            'Tyrion Lannister',
            'Daeneris Targaryen',
            'Yara Greyjoy',
            'Theon Greyjoy',
            'Melissandre',
            'Jorah Mormont',
            'The Hound',
            'The Mountain',
            'Samwell Tarly',
            'Gilly',
            'Sam(child)',
            'Lord Varys',
            'Brianne of Tarth',
            'Davos Seaworth',
            'Bronn',
            'Podrick Paven',
            'Tormund',
            'Grey Worm',
            'Gendry',
            'Berick Dondarrion',
            'Euron Greyjoy',
        ];
        foreach($characters as $name){
            $c = new Character;
            $c->name = $name;
            $c->status = 'alive';
            $c->white_walker = 0;
            $c->save();
        }
    }
}
