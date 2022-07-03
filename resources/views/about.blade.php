@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row" style="padding-top: 100px; width: 1200px;">
            <div class="col">
                <table border="1" style="table-layout: fixed; text-align: center; width: 350px; height: 450px; border-color: #eeeeee;">
                    <tr>
                        <td style="height: 250px"><img src={{ $img_organisasi }} alt="logo tentang organisasi" style="width: 200px; height: 200px;"></td>
                    </tr>
                    <tr>
                        <th>Tentang Organisasi</th>
                    </tr>
                    <tr>
                        <td style="height: 200px; word-wrap: break-word;">{{ $sekilas_info_organisasi }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right; padding-right: 10px; padding-bottom: 10px;"><a class="btn btn-primary" href="/tentang+organisasi" role="button">More</a></td>
                    </tr>
                </table>
            </div>
            <div class="col">
                <table border="1" style="table-layout: fixed; text-align: center; width: 350px; height: 450px; border-color: #eeeeee;">
                    <tr>
                        <td style="height: 250px"><img src={{ $img_jimmonshop }} alt="logo bumj" style="width: 200px; height: 200px;"></td>
                    </tr>
                    <tr>
                        <th>Tentang Jimmonshop</th>
                    </tr>
                    <tr>
                        <td style="height: 200px; word-wrap: break-word;">{{ $sekilas_info_jimmonshop }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right; padding-right: 10px; padding-bottom: 10px;"><a class="btn btn-primary" href="/tentang+jimmonshop" role="button">More</a></td>
                    </tr>
                </table>
            </div>
            <div class="col">
                <table border="1" style="table-layout: fixed; text-align: center; width: 350px; height: 450px; border-color: #eeeeee;">
                    <tr>
                        <td style="height: 250px"><img src={{ $img_customer }} alt="logo customer service" style="width: 200px; height: 200px;"></td>
                    </tr>
                    <tr>
                        <th>Customer Service</th>
                    </tr>
                    <tr>
                        <td style="height: 200px; word-wrap: break-word;">{{ $Sekilas_info_cs }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right; padding-right: 10px; padding-bottom: 10px;"><a class="btn btn-primary" href="/customer+services" role="button">More</a></td>
                    </tr>
                </table>
            </div>
          </div>
    </div>
@endsection
