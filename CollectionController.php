<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);

        dump($collection);

    }

    public function collectionDua()
    {   //Collectoin dari berbagai type data
        $collection = collect(["Belajar","Laravel","Enak Banget", 1, 2, 3, 4]);
        echo $collection;

        echo "<br>";

        //Collection dari associative array
        $collection = collect([
            "Nama" => "Hendro Gunawan",
            "Sekolah" => "SMA Negeri 1 Muara Enim",
            "Kota" => "Muara Enim",
            "Jurusan" => "IPA",
        ]);
        echo $collection;
    }

    public function collectionTiga()
    {
        //  berguna untuk mengurutkan isi collection
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        dump( $collection->sort() );
        // {"0":1,"2":3,"5":3,"3":4,"4":5,"6":5,"7":7,"1":9}

    }

    public function collectionEmpat()
    {
        //  cara penulisan lain dari perulangan foreach

        $collection = collect([
            "Nama" => "Hendro Gunawan",
            "Sekolah" => "Universitas Siber Asia",
            "Kota" => "Jakarta",
            "Jurusan" => "PJJ Informatika",
            ]);

        $collection->each(function($val, $key) {
            echo "$key: $val <br>";
        });
    }

    public function collectionLima()
    {
        $collection = collect([
            ['NamaProduk' => 'Laptop A','Harga' => 19000000],
            ['NamaProduk' => 'SmartphoneB', 'Harga' => 5300000],
            ['NamaProduk' => 'Speaker C', 'Harga' => 350000],
        ]);
        dump( $collection );
    }
    public function collectionEnam()
    {
        //... isi method collectionEnam
    }
}
