<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("dbseeder.comics");
        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            $newComic->price = $comic["price"];
            $lastkey = array_key_last($comic["artists"]);
            $all_artist = "";
            foreach ($comic["artists"] as $key => $artist) {
                if ($key !== array_key_last($comic["artists"])){
                    $all_artist .= $artist . ", ";
                }
                else{
                    $all_artist .= $artist;
                }
            }
            $newComic->artists = $all_artist;

            $all_writers = "";
            foreach ($comic["writers"] as $key => $writer) {
                if ($key !== array_key_last($comic["writers"])){
                    $all_writers .= $writer . ", ";
                }
                else{
                    $all_writers .= $writer;
                }
            }
            $newComic->writers = $all_writers;
            $newComic->series = $comic["series"];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->type = $comic["type"];
            $newComic->save();
        }
    }
}
