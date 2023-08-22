@extends('layouts.app')
@section('content')

        <div id="wrapper">
                <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">
                    <a class="sidebar-brand d-flex align-items-center justify-content-center">
                        <div class="sidebar-brand-text mx-3">QTASNIM</div>
                    </a>
                    <hr class="sidebar-divider my-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/mcoa/vnormalisasi">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Normalisasi</span></a>
                    </li>
                    <hr class="sidebar-divider">

                    <div class="sidebar-heading">
                        Main Menu
                    </div>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Menu</span>
                        </a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="/mcoa/vingridients">Ingridients</a>
                            </div>
                        </div>
                    </li>
                </ul>

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <div class="container-fluid">
                        <div class="card shadow mb-4 mt-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Table Normalisasi</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Stok</th>
                                                <th>Jenis Barang</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roleIngridients as $item)
                                            <tr>
                                                <td><b>TRS-MMXXIII-{{ $item->no }}</b></td>
                                                <td>{{ $item->nama_barang }}</td>
                                                <td>{{ $item->stok }}</td>
                                                <td>{{ $item->jenis_barang }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah Terjual</th>
                                                <th>Tanggal Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roleIngridients as $item)
                                            <tr>
                                                <td><b>TRS-MMXXIII-{{ $item->no }}</b></td>
                                                <td>{{ $item->nama_barang }}</td>
                                                <td>{{ $item->jumlah_terjual }}</td>
                                                <td>{{ $item->tanggal_transaksi }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Qtasnim 2023</span>
                        </div>
                    </div>
                </footer>

            </div>
        </div>

@endsection