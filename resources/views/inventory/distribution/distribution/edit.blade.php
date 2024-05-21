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
                <a class="nav-link collapsed" data-bs-target="#branch-nav" data-bs-toggle="collapse" href="#">
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
                <a class="nav-link " data-bs-target="#distribution-nav" data-bs-toggle="collapse" href="#">
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
            <!-- Total Data Restock Card -->
            <div class="col-xxl-6 col-md-6">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title">Data Distribution</br><span>| DTB/001</span></h5>
                            </div>
                            <div class="col-6">
                                <div class="col-sm-12 card-title d-flex justify-content-end">
                                    <button type="button" class="btn btn-success"><i class="bi bi-printer"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-calendar-week"></i>
                            </div>
                            <div class="ps-3">
                                <h6>16/05/2024</h6>
                                <span class="text-muted small pt-2 ps-1">Shipper : Ambatukam <br> Receiver : Warehouse</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div><!-- End Data Restock Card -->

            <!-- Total Data Status Card -->
            <div class="col-xxl-6 col-md-6">

                <div class="card info-card customers-card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title">Data Distribution</br><span>| Update</span></h5>
                            </div>
                            <div class="col-6">
                                <div class="col-sm-12 card-title d-flex justify-content-end">
                                    <button type="button" class="btn btn-warning"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                            </div>
                        </div>

                        <form action="">
                            <div class="d-flex align-items-center mb-1">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                    id="pending" value="Pending" checked>
                                                <label class="form-check-label" for="pending">
                                                    Pending
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                    id="on-progress" value="on-progress">
                                                <label class="form-check-label" for="on-progress">
                                                    On-Progress
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                    id="checking" value="checking">
                                                <label class="form-check-label" for="checking">
                                                    Checking
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                    id="approve" value="approve">
                                                <label class="form-check-label" for="approve">
                                                    Approve
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                    id="rejected" value="rejected">
                                                <label class="form-check-label" for="rejected">
                                                    Rejected
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- End Data Status Card -->

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">List Distribution <span>| DTB/001</span></h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Barcode</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">PHN012</th>
                                    <td>Phone Samsung</td>
                                    <td>Rp 2.000.000,00</td>
                                    <td>12</td>
                                    <td>Pcs</td>
                                    <td>
                                        <form action="">
                                            <select name="status" id="">
                                                <option value="lolos">lolos</option>
                                                <option value="abnormal">abnormal</option>
                                            </select>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm"><i
                                                class="bi bi-pencil-square"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
