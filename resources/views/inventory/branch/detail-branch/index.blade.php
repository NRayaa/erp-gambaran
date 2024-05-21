@extends('layout.layout')

@section('sidebar')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-heading">Dashboard</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('dashboard')}}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Inventory</li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#product-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-box-seam"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="product-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('product')}}">
                            <i class="bi bi-circle"></i><span>Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('category')}}">
                            <i class="bi bi-circle"></i><span>Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('unit')}}">
                            <i class="bi bi-circle"></i><span>Unit</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Product Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#restock-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bag-plus"></i><span>Restock</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="restock-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Restock</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Archive</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Restock Nav -->

            <li class="nav-item">
                <a class="nav-link " data-bs-target="#branch-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-shop"></i><span>Branch</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="branch-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Branch</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Branch's Detail</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Branch Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-people"></i>
                    <span>Customer</span>
                </a>
            </li><!-- End Customer Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-cart-check"></i>
                    <span>Sale</span>
                </a>
            </li><!-- End Sale Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#distribution-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-truck"></i><span>Distribution</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="distribution-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Distribution</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Archive</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Distribution Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-clipboard-plus"></i>
                    <span>Supplier</span>
                </a>
            </li><!-- End Supllier Nav -->

            <li class="nav-heading">Human Resource</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-person-badge"></i>
                    <span>Employee</span>
                </a>
            </li><!-- End Employee Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-person-rolodex"></i>
                    <span>Position</span>
                </a>
            </li><!-- End Position Nav -->

            <li class="nav-heading">Admin Panel</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-person-add"></i>
                    <span>Create User</span>
                </a>
            </li><!-- End Create User Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-person-gear"></i>
                    <span>Privilage Setting</span>
                </a>
            </li><!-- End Privilage Nav -->

        </ul>

    </aside><!-- End Sidebar-->
@endsection

@section('content')
    <section class="section">
        <div class="row">
            <!-- Sale Card -->
            <div class="col-xxl-6 col-md-6">

                <div class="card info-card customers-card">

                    <div class="card-body">
                        <h5 class="card-title">Data Branch <span>| Recently</span></h5>

                        <div class="d-flex align-items-center mb-5">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-cart"></i>
                            </div>
                            <div class="ps-3">
                                <h6>1244</h6>
                                <span class="text-muted small pt-2 ps-1">Revenue : Rp 12.000.000 <br>Sale : Rp
                                    50.000.000</span>

                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-box"></i>
                            </div>
                            <div class="ps-3">
                                <h6>120000</h6>
                                <span class="text-muted small pt-2 ps-1">Total Product</span>

                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- End Sale Card -->

            <!-- Total Data Status Card -->
            <div class="col-xxl-6 col-md-6">

                <div class="card info-card customers-card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title">Data Restock</br><span>| Update</span></h5>
                            </div>
                            <div class="col-6">
                                <div class="col-sm-12 card-title d-flex justify-content-end">
                                    <button type="button" class="btn btn-warning"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Index</th>
                                    <th scope="col">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>Toko Ambatron</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>Yogyakarta Pakuwon</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>+62 815-2933-4532</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>Active</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div><!-- End Data Status Card -->

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Detail Branch</h5>

                    <!-- Bordered Tabs Justified -->
                    <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100 active" id="sale-tab" data-bs-toggle="tab"
                                data-bs-target="#bordered-justified-sale" type="button" role="tab"
                                aria-controls="sale" aria-selected="true">Sale</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="stock-tab" data-bs-toggle="tab"
                                data-bs-target="#bordered-justified-stock" type="button" role="tab"
                                aria-controls="stock" aria-selected="false">Stock</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="employee-tab" data-bs-toggle="tab"
                                data-bs-target="#bordered-justified-employee" type="button" role="tab"
                                aria-controls="employee" aria-selected="false">Employee</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                        <div class="tab-pane fade show active" id="bordered-justified-sale" role="tabpanel"
                            aria-labelledby="sale-tab">
                            <div class="col-md-12 col-sm-12">


                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="card-title">List Sale <span>| Toko Ambatron</span></h5>
                                        </div>
                                        <div class="col-6">
                                            <div class="col-sm-12 card-title d-flex justify-content-end">
                                                <button type="button" class="btn btn-success"><i
                                                        class="bi bi-printer"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Table with stripped rows -->
                                    <table class="table datatable table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Buyer</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Payment</th>
                                                <th scope="col">Operator</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">SL001</th>
                                                <td>Mahakam</td>
                                                <td>10</td>
                                                <td>Rp 2.000.000,00</td>
                                                <td>Budi</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">SL002</th>
                                                <td>Ambatron</td>
                                                <td>5</td>
                                                <td>Rp 1.000.000,00</td>
                                                <td>Andi</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->

                                </div>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="bordered-justified-stock" role="tabpanel"
                            aria-labelledby="stock-tab">
                            <div class="mt-3 row">
                                <div class="col-md-8 col-sm-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="card-title">List Stock <br><span>| Toko Ambatron</span></h5>
                                                </div>
                                                <div class="col-6">
                                                    <div class="col-sm-12 card-title d-flex justify-content-end">
                                                        <button type="button" class="btn btn-success"><i
                                                                class="bi bi-printer"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Table with stripped rows -->
                                            <table class="table datatable table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Barcode</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Stock</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">PH0912</th>
                                                        <td>Phone Samsung</td>
                                                        <td>Rp 2.000.000</td>
                                                        <td>12</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">KBD1203</th>
                                                        <td>Keyboard</td>
                                                        <td>Rp 250.000</td>
                                                        <td>102</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- End Table with stripped rows -->

                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="card-title">List Stock <br><span>| Need Restock</span></h5>
                                                </div>
                                                <div class="col-6">
                                                    <div class="col-sm-12 card-title d-flex justify-content-end">
                                                        <button type="button" class="btn btn-warning"><i
                                                                class="bi bi-send"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Table with stripped rows -->
                                            <table class="table datatable table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Barcode</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Stock</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">PH0912</th>
                                                        <td>Phone Samsung</td>
                                                        <td>12</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">KBD1203</th>
                                                        <td>Keyboard</td>
                                                        <td>102</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- End Table with stripped rows -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bordered-justified-employee" role="tabpanel"
                            aria-labelledby="employee-tab">
                            <div class="col-md-12 col-sm-12">


                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="card-title">List Employee <span>| Toko Ambatron</span></h5>
                                        </div>
                                        <div class="col-6">
                                            <div class="col-sm-12 card-title d-flex justify-content-end">
                                                <button type="button" class="btn btn-success"><i
                                                        class="bi bi-printer"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Table with stripped rows -->
                                    <table class="table datatable table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">KR1</th>
                                                <td>Andi Sitohang</td>
                                                <td>+62 893 7823 4932</td>
                                                <td>Leader</td>
                                                <td>Active</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">KR2</th>
                                                <td>Budiono Siregar</td>
                                                <td>+62 923 4022 4932</td>
                                                <td>Crew</td>
                                                <td>Active</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->

                                </div>


                            </div>
                        </div>
                    </div><!-- End Bordered Tabs Justified -->

                </div>
            </div>
        </div>
    </section>
@endsection
