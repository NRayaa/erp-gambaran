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
                <a class="nav-link " data-bs-target="#product-nav" data-bs-toggle="collapse" href="#">
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
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title">Edit Product Form</h5>
                            </div>
                            <div class="row my-3 col-6 text-right">
                                <div class="col-sm-12  d-flex justify-content-end">
                                    <button type="submit" class="btn btn-warning ">Edit Product</button>
                                </div>
                            </div>
                        </div>



                        <!-- Products Form -->
                        <form>
                            <div class="row mb-3">
                                <label for="barcode" class="col-sm-2 col-form-label">Barcode</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="product-name" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="product-category" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" list="category">
                                    <datalist id="category">
                                        <option value="Laptop"></option>
                                        <option value="Keyboard"></option>
                                        <option value="Mouse"></option>
                                        <option value="Speaker"></option>
                                    </datalist>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row mb-3 col-6">
                                    <label for="product-buying-price" class="col-sm-5 col-form-label">Buying Price</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3 col-6">
                                    <label for="product-selling-price" class="col-sm-5 col-form-label">Selling
                                        Price</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="branch" class="col-sm-2 col-form-label">Branch</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" list="branch">
                                    <datalist id="branch">
                                        <option value="Toko Ambarukmo"></option>
                                        <option value="Toko Hosana"></option>
                                        <option value="Toko Gilbert"></option>
                                    </datalist>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row mb-3 col-6">
                                    <label for="product-min-stock" class="col-sm-5 col-form-label">Minimal Stock</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3 col-6">
                                    <label for="product-discount" class="col-sm-5 col-form-label">General Discount</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="product-description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="product-spec" class="col-sm-2 col-form-label">Specification</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-danger">Delete Product</button>
                                    </div>
                                </div>
                            </div>

                        </form><!-- Product Form -->

                    </div>
                </div>
            </div>
    </section>
@endsection
