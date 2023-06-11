<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>No Transaksi</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
    <div id='a4-1' class='a4-1'>
        <div id='bersihlaundry' class='bersihlaundry'>
            Bersih Laundry
        </div>
        <div id='buktitransaksi' class='buktitransaksi'>
            Bukti Transaksi
        </div>
        <div id='notransaksi' class='notransaksi'>
            No Transaksi
        </div>
        <div id='item' class='item'>
            Item
        </div>
        <div id='servis' class='servis'>
            Servis
        </div>
        <div id='harga' class='harga'>
            Harga
        </div>
        <div id='jumlah' class='jumlah'>
            Jumlah
        </div>
        <div id='total' class='total'>
            Total
        </div>
        <div id='item2' class='item2'>
            {{ $transaksi->jasa->item }}
        </div>
        <div id='servis2' class='servis2'>
            {{ $transaksi->jasa->servis }}
        </div>
        <div id='harga2' class='harga2'>
            {{ $transaksi->jasa->harga }}
        </div>
        <div id='jumlah2' class='jumlah2'>
            {{ $transaksi->jumlah }}
        </div>
        <div id='total2' class='total2'>
            {{ $transaksi->Total }}
        </div>
        <div id='nama' class='nama'>
            Nama
        </div>
        <div id=':00000' class='c00000'>
            {{ $transaksi->nota }}
        </div>
        <div id='nama2' class='nama2'>
            {{ $transaksi->user_id }}
        </div>
        <div id='paket' class='paket'>
            Paket
        </div>
        <div id='nama3' class='nama3'>
            Kategori
        </div>
        <div id=':000002' class='c000002'>
            {{ $transaksi->jasa->paket }}
        </div>
        <div id='nama4' class='nama4'>
            {{ $transaksi->jasa->servis }}
        </div>
        <img id='logo1' class='logo1' src='data:image/png;base64,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'/>
    </img>
    <div id='line1' class='line1'>

    </div>
    <div id='line2' class='line2'>

    </div>
</div>
</body>
</html>
<script type="text/javascript">window.print();</script>
