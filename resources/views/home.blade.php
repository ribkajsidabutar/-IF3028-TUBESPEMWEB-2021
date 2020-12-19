<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Lapor</title>
    <style>
    body{
    background: #F08080;
    }
    
    h1{
        text-align: center;
        font-family: Helvetica;
    }
    .kaki{
        margin-left: 20px;
    }
    .kanan{
        float : right;
    }
    .cari{
        width: 40%;
        margin: 15px auto;
    }
    .p{
        text-align: center;
    }

    input{
        width: 400px;
        height: 40px;      
        display: inline;
    }

    button{
        width: 100px;
        height: 40px;      
        display: inline;
    }   
     b{
        font-size: 14px;
        display: inline;
    }
    </style>
</head>
<body>
<h1>SIMPLE LAPOR!</h1>
    <form class="cari" action="{{ route('cari') }}" method="POST">
        @csrf
        <p class="p"><input type="text" name="cari">
        </label>
        <button type="submit"><b>cari laporan</b></button> </p>
    </form>
    <a href="{{route('buatlaporan')}}"><p class="p">Buat Laporan/Komentar</p></a>
    <p>Laporan/Komentar Terakhir</p>
    <hr>
    @foreach ($data as $lapor)
    <div class="container">
    <div class="card">
    <p>{{$lapor->isilaporan}}</p>
    <div class="kaki">
    <span>Lampiran : {{$lapor->file}}</span>
    <span class="kanan">
    <span>Waktu : {{$lapor->created_at}}</span>
    <span> <a href="/laporan/{{$lapor->id}}">Lihat Selengkapnya X</a></span>
    </span>
    </div> 
    <hr>
    </div>
    </div>
    @endforeach
</body>
</html>