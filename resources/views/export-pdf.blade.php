<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan_{{str_replace(' ', '_', $pengaduan->user->name, )}}/{{$pengaduan->user->nik}}/{{$pengaduan->id}}</title>
    <link rel="stylesheet" href="../resources/css/pdf.css">
    <style>

    </style>
</head>
<body>
    <table class="top" style="width: 100%">
        <tr>
            <td style="width: 30%"><img src="{{asset('img/logo_pede_nobg.png')}}" alt="" class="img-logo"></td>
            <td style="width: 70%; padding-left: 5rem" class="judul">
                <p style="font-size: 2.25rem; line-height: 2.5rem; text-align: center; font-weight: 600" class="font-bol">PEDULI DEPOK</p>
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 65%"></td>
            <td style="width: 35%">
                <p>{{$pengaduan->created_at->format('l, d F Y')}}</p>
            </td>
        </tr>
    </table>
    <table class="" style="width: 100%; padding-top: 2rem">
        <tr>
            <td style="width: 100%; font-size: 0.9rem">
                <p style="">No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$pengaduan->id < 10 ? '0'.$pengaduan->id : $pengaduan->id }}&nbsp;/&nbsp;{{$pengaduan->user->nik}}&nbsp;/&nbsp;{{$pengaduan->created_at->format('m')}}&nbsp;/&nbsp;{{$pengaduan->created_at->format('Y')}}</p>
                @if($image)
                <p style="">Lampiran &nbsp;&nbsp;: 2 Lampiran</p>
                @else
                <p style="">Lampiran &nbsp;&nbsp;: 1 Lampiran</p>
                @endif
                <p style="">Perihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$pengaduan->category}}</p>
                <p style="">Pelapor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$pengaduan->user->name}}</p>
            </td>
        </tr>
    </table>
    <div style="margin-top: 2rem">
        <h3 style="text-align: center">{{$pengaduan->judul}}</h3>
    </div>
    <div style="margin-top: 1rem;">
        <p style="margin-left: 0.5rem; margin-right: 3rem;text-align: justify; text-indent: 2rem">
            {{$pengaduan->isi}}<br>
        </p>
        <p style="margin-left: 0.5rem; margin-right: 3rem;text-align: justify; text-indent: 2rem">
            Demikian Surat Laporan ini kami sampaikan dengan sebenar-benarnya agar dapat ditindak lanjuti sebagaimana mestinya.
        </p>
    </div>
    @if($image)
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 style="text-align: center">Lampiran</h2>
    <br>
    <br>
    @endif
    @php
        $no = 1
    @endphp
    <table style="margin-left: 30%; margin-right: 30%;">
        @forelse($image->where('pengaduan_id', $pengaduan->id) as $key)
        <tr>
            <td>
                <img src="{{asset('image/'.$key->image)}}" alt="" style="max-width: 15rem; max-height: 15rem">
                <br>
                <p style="text-align:center"> Gambar {{$no++}} </p>
            </td>
        </tr>
        @empty
            
        @endforelse
        <tr>
            <td></td>
        </tr>
    </table>
</body>
</html>