<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Data Pegawai</center>
    @foreach ($gaji as $data)
        @if ($data['jabatan'] == "manager")
        @php
            $jab = 500000;
        @endphp
        @elseif($data['jabatan']== "sekertaris")
        @php
            $jab = 350000;
        @endphp
        @elseif($data['jabatan']== "staff")
        @php
            $jab = 250000;
        @endphp

        @endif

        @if ($data['jam_kerja'] > 250)
        @php
         $bonus = 0.10 * $jab;
        @endphp
        @elseif($data['jam_kerja'] > 200)
        @php
            $bonus = 0.05 * $jab;
        @endphp
        @else
            @php
                $bonus = 0;
            @endphp

        @endif



            @php
               $ppn = 0.025 * $jab;
            @endphp
            @php
            $gaber = ($jab + $bonus) - $ppn;
            @endphp
            Nama : {{$data['nama']}}<br>
            agama: {{$data['agama']}}<br>
            jabatan: {{$data['jabatan']}}<br>
            jam bekerja : {{$data['jam_kerja']}}<br>
            gaji : {{$jab}}<br>
            bonus : {{$bonus}}<br>
            ppn : {{$ppn}}<br>
            gajih bersih : {{$gaber}}<br>
            <hr>

    @endforeach
</body>
</html>
