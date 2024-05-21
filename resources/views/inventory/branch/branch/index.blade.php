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

            <!--Left Section-->
            <div class="col-sm-4 row">
                <!-- Total Product Card -->
                <div class="col-12">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Branch <span>| All</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-shop"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>5</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Product Card -->

                <div class="col-12">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Branch <span>| Add</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="ps-3">
                                    <div class="row mb-3">
                                        <div class=" mb-3 col-sm-12">
                                            <input type="text" class="form-control" placeholder="Branch's Name">
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <input type="number" class="form-control" placeholder="Branch's Address">
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <input type="number" class="form-control" placeholder="Branch's Phone">
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary btn-sm">Add Branch</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Product Card -->
            </div><!-- End Left Section -->

            <!-- Right Section -->
            <div class="col-sm-8 row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Branch</h5>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Toko Amba</td>
                                        <td>Yogyakarta Pakuwon</td>
                                        <td>+62 815-8227-345</td>
                                        <td>Active</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#basicModal"><i class="bi bi-search"></i></button>
                                            <!-- Basic Modal -->
                                            <div class="modal fade" id="basicModal" tabindex="-1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Branch</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-12">


                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="ps-3">
                                                                                <div class="row mb-3">
                                                                                    <div class=" mb-3 col-sm-12">
                                                                                        <input type="text" class="form-control" placeholder="Branch's Name">
                                                                                    </div>
                                                                                    <div class="mb-3 col-sm-12">
                                                                                        <input type="number" class="form-control" placeholder="Branch's Address">
                                                                                    </div>
                                                                                    <div class=" col-sm-12">
                                                                                        <input type="number" class="form-control" placeholder="Branch's Phone">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                            </div><!-- End Product Card -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- End Basic Modal-->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
            <!-- End Right Section -->
        </div>
    </section>
@endsection
