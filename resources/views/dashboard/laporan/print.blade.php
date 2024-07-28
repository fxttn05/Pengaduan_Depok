<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laporan_{{$to}}-{{$from}}</title>
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
    <p style="font-size: 1.75rem; font-weight: 600; text-align: center;"> Pengaduan bulanan</p>
    <table style="width: 100%">
        <tr>
            <td style="width: 65%"></td>
            <td style="width: 35%">
                <p style="font-size: 0.7rem; text-align: right"> Tanggal : {{date('d F Y', strtotime($from))}} - {{date('d F Y', strtotime($to));}}</p>
            </td>
        </tr>
    </table>
    <table style="width:100%; border: 0.5px solid black; border-collapse: collapse; padding: 2px">
        <tbody>
            <tr style="font-size: 0.7rem; margin-bottom: 3px; border: 0.5px solid black; border-collapse: collapse; padding: 2px">
                <td style="border: 0.5px solid black; border-collapse: collapse; padding: 3px; font-weight: 600">judul</td>
                <td style="border: 0.5px solid black; border-collapse: collapse; padding: 3px; font-weight: 600">pelapor</td>
                <td style="border: 0.5px solid black; border-collapse: collapse; padding: 3px; font-weight: 600">tanggal kejadian</td>
                <td style="border: 0.5px solid black; border-collapse: collapse; padding: 3px; font-weight: 600">status</td>
                <td style="border: 0.5px solid black; border-collapse: collapse; padding: 3px; font-weight: 600">tanggal terlapor</td>
            </tr>
            @foreach ($pengaduan as $item)
                <tr style="font-size: 0.6rem; border: 0.5px solid black; border-collapse: collapse; padding: 2px">
                    <td style="border: 0.5px solid black; border-collapse: collapse; padding: 3px;">{{ $item->judul }}</td>
                    <td style="border: 0.5px solid black; border-collapse: collapse; padding: 3px;">{{ $item->user->name}}</td>
                    <td style="border: 0.5px solid black; border-collapse: collapse; padding: 3px;">{{ $item->pengaduan_date }}</td>
                    @if($item->status == '1.report')
                    <td style="border: 0.5px solid black; border-collapse: collapse; padding: 3px;">Report</td>
                    @elseif($item->status == '2.verified')
                    <td style="border: 0.5px solid black; border-collapse: collapse; padding: 3px; color: green">verified</td>
                    @elseif($item->status == '1.replied')
                    <td style="border: 0.5px solid black; border-collapse: collapse; padding: 3px; color: blue">Replied</td>
                    @endif
                    <td style="border: 0.5px solid black; border-collapse: collapse; padding: 3px;">{{ $item->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>