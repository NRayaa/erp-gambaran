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
                <a class="nav-link " data-bs-target="#restock-nav" data-bs-toggle="collapse" href="#">
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
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Upload File Excel | Restock</h5>

                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="destination" class="col-sm-2 col-form-label">Destination</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" list="destiny">
                                    <datalist id="destiny">
                                        <option value="Warehouse"></option>
                                        <option value="Toko Abata"></option>
                                        <option value="Toko Nirmala"></option>
                                    </datalist>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Upload Excel</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Create Restock</button>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-12 col-form-label"><small><a href="">Klik di sini </a>untuk download template Excel</small></label>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
