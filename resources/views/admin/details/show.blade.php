<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nota</title>
    <link rel="shortcut icon" href="{{ asset('/assets/img/1logo.png') }}">
    <style>
        .img-1{
            position: absolute;
            width: 60px;
            height: 56.13px;
            left: 93px;
            top: 44px;
        }
    </style>
</head>
<div>
    <img class="img-1" src="{{ asset('assets/img/1logo.png') }}" alt="">
</div>

<center>
    <h3><strong>Transaksi</strong></h3>
</center>
<center>
    <label class="focus-label">ID Transaksi</label>
    <label  for=""> : {{ $transaksi->nota }}</label>
    <label class="focus-label">Status</label>
    <label for=""> : {{ $transaksi->status->name_status }}</label>
    <label class="focus-label">Nama Member</label>
    <label for=""> : {{ $transaksi->user_id }}</label>
    <label class="focus-label">Kategori</label>
    <label for=""> : {{ $transaksi->jasa->kategori }}</label>
</center>
<center>
    _______________________________________________________________________________________________________
</center>
<center>
    <tr>
        <td>
            <label for=""><strong>Item</strong></label>
        </td>
        <td>
            <label for=""><strong>Servis</strong></label>
        </td>
        <td>
            <label for=""><strong>Paket</strong></label>
        </div=>
        <td>
            <label for=""><strong>Jumlah</strong></label>
        </td>
        <td>
            <label for=""><strong>Harga</strong></label>
        </td>
        <td>
            <label for=""><strong>Total Harga</strong></label>
        </td>
    </tr>
</center>
<center>
    _______________________________________________________________________________________________________
</center>
<center>
    <tr>
        <td>
            <label for="">{{ $transaksi->jasa->item }}</label>
        </div>
        <td>
            <label for="">{{ $transaksi->jasa->servis }}</label>
        </td>
        <td>
            <label for="">{{ $transaksi->jasa->paket }}</label>
        </td>
        <td>
            <label for="">{{ $transaksi->jumlah }}</label>
        </td>
        <td>
            <label for="">Rp. {{ $transaksi->jasa->harga }}</label>
        </td>
        <td>
            <label for="">Rp. {{ $transaksi->jumlah*$transaksi->jasa->harga }}</label>
        </td>
    </tr>
</center>
</body>
</html>
<script type="text/javascript">window.print();</script>
