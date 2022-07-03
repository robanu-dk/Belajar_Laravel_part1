@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row" style="padding-top: 100px;">
            <div class="col">
                <table border="1" style="table-layout: fixed; text-align: center; width: 400px; height: 450px; border-color: #eeeeee;">
                    <tr>
                        <td style="height: 250px"><img src={{ $img }} alt="poster event" style="width: 350px; padding-top: 20px;"></td>
                    </tr>
                    <tr>
                        <th>{{ $nama_event }}</th>
                    </tr>
                    <tr>
                        <td style="height: 200px; word-wrap: break-word;">{!! $sekilas_info !!}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right; padding-right: 10px; padding-bottom: 10px;"><a class="btn btn-primary" href='/Kajian+KWU+:+"+WIRAUSAHA+SEBAGAI+PELUANG+MEMAKNAI+BERKAH+RAMADHAN+"' role="button">More</a></td>
                    </tr>
                </table>
            </div>
          </div>
    </div>
@endsection
