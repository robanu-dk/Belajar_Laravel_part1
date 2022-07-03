<?php

namespace App\Models;

class Event
{

    private static $kilas_info= [
        'title' => 'Events',
        'img' => 'Poster-event.jpg',
        'nama_event' => 'Kajian KWU: "WIRAUSAHA SEBAGAI PELUANG MEMAKNAI BERKAH RAMADHAN"',
        'sekilas_info' => '✨KAJIAN KEWIRAUSAHAAN✨ <br>
                            Assalamualaikum Warahmatullahi warakatuh <br>
                            Hallo manteman gimana nih awal puasanya? Semoga selalu diberikan nikmat sehat agar dapat beribadah dengan maksimal  <br>
                            Siapa nih yang tertarik menjadi wirausahawan?🙋🏼‍♀️  Tentunya dunia wirausaha......'
    ];

    private static $event= [
        'title' => 'Kajian KWU: "WIRAUSAHA SEBAGAI PELUANG MEMAKNAI BERKAH RAMADHAN"',
        'img' => 'Poster-event.jpg',
        'nama_event' => 'Kajian KWU: "WIRAUSAHA SEBAGAI PELUANG MEMAKNAI BERKAH RAMADHAN"',
        'caption_pembuka' => '✨KAJIAN KEWIRAUSAHAAN✨ <br><br>
                        Assalamualaikum Warahmatullahi warakatuh <br><br>
                        Hallo manteman gimana nih awal puasanya? Semoga selalu diberikan nikmat sehat agar dapat beribadah dengan maksimal  <br><br>
                        Siapa nih yang tertarik menjadi wirausahawan?🙋🏼‍♀️  Tentunya dunia wirausaha sekarang menjadi incaran oleh banyak orang benar atau benar?🤔 <br><br>
                        Eits eits untuk mencapai semua harus didasari kemauan dengan tekad yang bulat serta harus berani dalam mengambil peluang yang ada. Nah yuk disimak yuk🤩🤩🤩 <br><br>
                        Kini Hadir kajian yang mengupas tuntas dunia wirausaha sebagai peluang dalam memaknai berkah Ramadhan bersama: <br><br>
                        Ustadz Hutri Agus Prayudo (Founder Majelis Gaul) <br><br>',
        'link_pendaftaran' => 'https://bit.ly/PendaftaranKajianKWU',
        'tanggal' => '📆 9 April 2022',
        'waktu' => '⏰ 15.20 WIB',
        'lokasi' => '🖥️ Zoom meeting (link menyusul)',
        'benefit' => '📌 Benefit : <br>
                        1. Ilmu yang bermanfaat <br>
                        2. Sertifikat ber-SKP <br>
                        3. Reward bagi yang beruntung <br>
                        4. Relasi <br><br>',
        'caption_penutup' => "Nah tunggu apalagi, yuk manfaatkan peluang jangan sampai menyesal☺️ <br><br>
        ⚠️ SLOT TERBATAS!!!! <br><br>
        Siapa cepat dia yang dapat, ditunggu partisipasinya manteman🙌🤝 <br><br>
        Wassalamu'alaikum warahmatullahi warakatuh"
    ];

    public static function kilas_info()
    {
        return self::$kilas_info;
    }

    public static function event_detail()
    {
        return self::$event;
    }

}
