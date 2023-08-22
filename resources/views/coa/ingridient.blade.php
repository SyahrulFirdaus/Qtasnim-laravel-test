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
                                <h6 class="collapse-header">Kebutuhan Kafe</h6>
                                <a class="collapse-item" href="/mcoa/vingridients">Ingridients</a>
                            </div>
                        </div>
                    </li>
                </ul>

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <div class="container-fluid">

                        <a class="btn btn-primary mb-4 mt-4 pl-3" href="#" data-toggle="modal" data-target="#AddIngridients">
                            <i class="fas fa-plus-square pr-1"></i>
                                Add Ingridients
                        </a>

                        <a class="btn btn-primary mb-4 mt-4" href="/mcoa/exportIngridients" target="_blank">
                            <i class="fas fa-print"></i>
                            PDF
                        </a>

                        <a >                      
                            <form action="/mcoa/vingridients" method="GET"
                                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="search" name="search" id="search" class="form-control bg-light border border-primary small" placeholder="Cari Nama Barang"
                                        aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>                        
                        </a>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Table Ingridients</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Stok</th>
                                                <th>Jumlah Terjual</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Jenis Barang</th>
                                                <th>Edit</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roleIngridients as $item)
                                            <tr>
                                                <td><b>TRS-MMXXIII-{{ $item->no }}</b></td>
                                                <td>{{ $item->nama_barang }}</td>
                                                <td>{{ $item->stok }}</td>
                                                <td>{{ $item->jumlah_terjual }}</td>
                                                <td>{{ $item->tanggal_transaksi }}</td>
                                                <td>{{ $item->jenis_barang }}</td>
                                                <td>
                                                    <a class="btn btn-primary mb-4" href="/mcoa/{{ $item-> id }}/editIngridients">
                                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                        Edit
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#HapusIngridients">
                                                        <i class="fas fa-trash pr-1"></i>
                                                            Delete
                                                    </a>
                                                </td>
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

        <div class="modal fade" id="AddIngridients" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Data Ingridients</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="/mcoa/storeIngridients" method="POST">
                            @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No</label>
                            <input type="text" class="form-control border border-warning" id="no" name="no" required>
                            <div  class="form-text">Enter the code number.</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control border border-warning" id="nama_barang" name="nama_barang" required>
                            <div  class="form-text">Enter the item name.</div>
                        </div>

                         <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Stok</label>
                            <input type="text" class="form-control border border-warning" id="stok" name="stok" required>
                            <div  class="form-text">Enter the number of stock items.</div>
                        </div>

                         <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jumlah Terjual</label>
                            <input type="text" class="form-control border border-warning" id="jumlah_terjual" name="jumlah_terjual" required>
                            <div  class="form-text">Enter the number of items sold.</div>
                        </div>

                         <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Transaksi</label>
                            <input type="date" class="form-control border border-warning" id="tanggal_transaksi" name="tanggal_transaksi" required>
                            <div  class="form-text">Enter the date of the sales transaction.</div>
                        </div>

                         <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Barang</label>
                            <input type="text" class="form-control border border-warning" id="jenis_barang" name="jenis_barang" required>
                            <div class="form-text">Enter the type of item name.</div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" value="save">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="HapusIngridients" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Ingridients</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Do you really want to delete the data?
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <form action="/mcoa/vingridients/{{ $item-> id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                    </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

 