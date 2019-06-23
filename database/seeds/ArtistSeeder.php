<?php

use Illuminate\Database\Seeder;
use App\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = json_decode(file_get_contents(__DIR__.'\\..\\importdata\\Artists.json'));

        foreach ($artists as $artist) {
        	Artist::create([
        		'name' => $artist->name,
        		'type' => $artist->type,
        		'image' => $artist->image,
        		'record_label_id' => $artist->record_label_id
        	]);
        }
    }
}
