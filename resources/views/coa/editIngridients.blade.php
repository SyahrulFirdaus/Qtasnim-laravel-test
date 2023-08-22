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
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Menu</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Chart of Account</h6>
                            <a class="collapse-item" href="/mcoa">Master Chart of Account</a>
                            <a class="collapse-item" href="/mcoa/vkategori">Kategori Chart of Account</a>
                            <a class="collapse-item" href="/mcoa/vtransaction">Transaction</a>
                            <a class="collapse-item" href="/mcoa/vingridients">Ingridients</a>

                        </div>
                    </div>
                </li>

                <hr class="sidebar-divider">

            </ul>

            <div id="content-wrapper" class="d-flex flex-column mt-4">
                <div id="content">
                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Edit Data Ingridients</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="/mcoa/vingridients/{{ $coa->id }}" method="POST">
                                        @method('put')
                                        @csrf
                                      <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">No</label>
                                            <input type="text" class="form-control" id="no" name="no" aria-describedby="kodeHelp" value="{{ $coa->no }}">
                                            <div id="kodeHelp" class="form-text">Enter the code number.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" aria-describedby="nikHelp" value="{{ $coa->nama_barang }}">
                                            <div id="namaHelp" class="form-text">Enter the item name.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Stok</label>
                                            <input type="text" class="form-control" id="stok" name="stok" aria-describedby="nikHelp" value="{{ $coa->stok }}">
                                            <div id="namaHelp" class="form-text">Enter the number of stock items.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Jumlah Terjual</label>
                                            <input type="text" class="form-control" id="jumlah_terjual" name="jumlah_terjual" aria-describedby="nikHelp" value="{{ $coa->jumlah_terjual }}">
                                            <div id="namaHelp" class="form-text">Enter the number of items sold.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Transaksi</label>
                                            <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" aria-describedby="nikHelp" value="{{ $coa->tanggal_transaksi}}">
                                            <div id="namaHelp" class="form-text">Enter the date of the sales transaction.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Jenis Barang</label>
                                            <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" aria-describedby="nikHelp" value="{{ $coa->jenis_barang }}">
                                            <div id="namaHelp" class="form-text">Enter the type of item name.</div>
                                        </div>
                                    <a class="btn btn-warning" href="/mcoa/vingridients">Cancel</a>
                                    <button type="submit" class="btn btn-primary" value="save">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

   @endsection
        
