@extends('layouts.main')

@section('container')
    <div class="container" style="padding-top: 100px">
        <table align="center">
            <tr>
                <th style="text-align: center"><h3>{{ $nama_event }}</h3></th>
            </tr>
            <tr>
                <td style="text-align: center; padding-top: 20px;">
                    <img src={{ $img }} alt="poster event" style=" width: 450px; padding-bottom: 20px;">
                </td>
            </tr>
            <tr>
                <td>
                    {!! $caption_pembuka !!}
                    Yuk bisa langsung daftar melalui link 👇 <br>
                    <a href={{ $link_pendaftaran }}>KLIK DI SINI!!</a> <br><br>
                    Acara akan dilaksanakan pada:
                    <table>
                        <tr>
                            <th>Tanggal</th>
                            <th>:</th>
                            <td>{{ $tanggal }}</td>
                        </tr>
                        <tr>
                            <th>Waktu</th>
                            <th>:</th>
                            <td>{{ $waktu }}</td>
                        </tr>
                        <tr>
                            <th>Lokasi</th>
                            <th>:</th>
                            <td>{{ $lokasi }}</td>
                        </tr>
                    </table><br>
                    {!! $benefit !!}
                    {!! $caption_penutup !!}
                </td>
            </tr>
        </table>
    </div>
@endsection
