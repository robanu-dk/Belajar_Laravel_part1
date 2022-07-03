<?php

namespace App\Models;

class Stakeholder
{

    private static $sekilas_info= [
        'img_organisasi' => 'logo-tentang-organisasi.jpeg',
        'img_jimmonshop' => 'LOGO-BUMJ.png',
        'img_customer' => 'logo-customer-service.jpeg',
        'sekilas_info_organisasi' => 'BUMJ memiliki kepanjangan Biro Usaha Milik JIMM
                                      merupakan biro yang terdapat di organisasi mahasiswa yang berada di Fakultas Sains dan
                                      Teknologi (FST) yang bernama JIMM....',
        'sekilas_info_jimmonshop' => 'jimmonshop merupakan aplikasi berbasis website jual-beli dimana target pasarnya adalah
                                      masyarakat umum terutama remaja. Proses transaksi....',
        'Sekilas_info_cs' => 'Jika ada permasalahan atau pertanyaaan lebih lanjut, jangan ragu untuk menghubungi kami....'
    ];

    private static $stakeholder= [
        "stakeholder_name" => "BUMJ",
        "description_organisasi" => "BUMJ memiliki kepanjangan Biro Usaha Milik JIMM
                                    merupakan biro yang terdapat di organisasi mahasiswa yang berada di Fakultas Sains dan
                                    Teknologi (FST) yang bernama JIMM. BUMJ bergerak di bidang yang berkaitan dengan usaha dan
                                    kewirausahaan. BUMJ sendiri memiliki event yang berupa kajian-kajian terkait kewirausahaan.
                                    Selain itu, BUMJ juga menjual beberapa produk secara online.",
        "instagram" => "@jimmonshop"
    ];

    private static $jimmonshop= [
        'website_name' => 'jimmonshop',
        "description_website" => "jimmonshop.com merupakan aplikasi berbasis website jual-beli dimana target pasarnya adalah
                                 masyarakat umum terutama remaja. Proses transaksi atau pembelian dilakukan secara online dan
                                 selanjutnya barang yang dipesan akan dikirimkan ke tempat pembeli."
    ];

    private static $cs= [
        "img_cp1" => "cp1.png",
        "nama_cp1" => "Jasmine Yulis Saputri",
        "Notelp_cp1" => "082011633001",
        "img_cp2" => "cp2.png",
        "nama_cp2" => "Robanu Dakhayin",
        "Notelp_cp2" => "082011633027"
    ];

    public static function sekilas_info() {
        return self::$sekilas_info;
    }

    public static function stakeholder()
    {
        return self::$stakeholder;
    }

    public static function jimmonshop()
    {
        return self::$jimmonshop;
    }

    public static function cs()
    {
        return self::$cs;
    }

}
