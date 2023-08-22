@extends('layouts.app')
@section('content')
    
    <div id="wrapper">
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content"> 
                    <div class="container-fluid">
                            <div class="card-body">
                                <div class="table-responsive mt-5">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Stok</th>
                                                <th>Jumlah Terjual</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Jenis Barang</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roleTransaction as $item)
                                            <tr>
                                                    <td><b>TRS-MMXXIII-{{ $item->no }}</b></td>
                                                    <td>{{ $item->nama_barang }}</td>
                                                    <td>{{ $item->stok }}</td>
                                                    <td>{{ $item->jumlah_terjual }}</td>
                                                    <td>{{ $item->tanggal_transaksi }}</td>
                                                    <td>{{ $item->jenis_barang }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <script type="text/javascript">
            window.print();
        </script>
@endsection