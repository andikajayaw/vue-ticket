<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Tiket\Tiket;
use App\Model\Categori\Categori;
use Faker\Generator as Faker;

$factory->define(Tiket::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        //
        'nama_tiket' => $word, 
        'harga_tiket' => rand(1, 1000000), 
        'jenis_tiket'=> $word,
        'jumlah_tiket'=> rand(1, 30), 
        'id_kategori'=> function() {
            return Categori::all()->random();
        }, 
    ];
});
