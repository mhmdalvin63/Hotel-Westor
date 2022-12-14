<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
    <style>
        #fasilitashotel {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
    
        #fasilitashotel td, #fasilitashotel th {
            border: 1px solid #ddd;
            padding: 8px;
        }
    
        #fasilitashotel tr:nth-child(even){background-color: #f2f2f2;}
    
        #fasilitashotel tr:hover {background-color: #ddd;}
    
        #fasilitashotel th {
            text-align: center;
            background-color: #65e08ae5;
            color: white;
        }
        *{
            font-size: 12px;
        }
    </style>
</head>
<body>
    <center>
    <h2>Rekap Data Pemesanan</h2>
    </center>
    <table id="fasilitashotel" class="table table-sm" width="100%" style="position:relative;right: 2.8rem;">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Hotel</th>
            <th>Jumlah Orang</th>
            <th>Jumlah Room Use</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>No Telp</th>
            <th>Room Type</th>
            <th>Spesial Request</th>
            <th>Tanggal CheckIn</th>
            <th>Tanggal CheckOut</th>
        </tr>
        </thead>
        @php
          $no=1;
      @endphp
        @foreach ( $datapemesanan as $item )
            <tbody>
            <tr>
                <td>{{ $no++}}</td>
                <td>{{ $item->fasilitashotel->namahotel }}</td>
                <td>{{ $item->bprorng }}</td>
                <td>{{ $item->jumlahkamar_pinjam }}</td>
                <td>{{ $item->firstname }}</td>
                <td>{{ $item->lastname }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->notelp }}</td>
                <td>{{ $item->fasilitaskamar->tipekamar }}</td>
                <td>{{ $item->spesialrequest }}</td>
                <td>{{ $item->tanggal_checkin }}</td>
                <td>{{ $item->tanggal_checkout }}</td>
            </tr>
            </tbody>
        @endforeach
    
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>