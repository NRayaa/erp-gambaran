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
            <!-- Total Product Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h5 class="card-title">Product <span>| All</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-box"></i>
                            </div>
                            <div class="ps-3">
                                <h6>145</h6>
                                <span class="text-danger small pt-1 fw-bold">10</span> <span
                                    class="text-muted small pt-2 ps-1">need restock</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Product Card -->

            <!-- Total Product Sold Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h5 class="card-title">Product Sold <span>| All</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-boxes"></i>
                            </div>
                            <div class="ps-3">
                                <h6>145</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Product Sold Card -->

            <div class="row">

                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">List Product <span>| Warehouse</span></h5>
                            <a href="{{route('product-create')}}"><button type="button" class="btn btn-primary">Add Product</button></a>

                            <!-- Table with stripped rows -->
                            <table class="table datatable table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Barcode</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Selling</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>PH092123</td>
                                        <td>Phone Samsung</td>
                                        <td>Rp 2.000.000,00</td>
                                        <td>10</td>
                                        <td>
                                            <a href="{{route('product-edit')}}"><button type="button" class="btn btn-warning btn-sm"><i class="bi bi-search"></i></button></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>

                <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Activity Distribution -->
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Need Restock <span>| Warehouse</span></h5>

                        <div class="activity">

                            <div class="activity-item d-flex">
                                <div class="activite-label">32 min</div>
                                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                <div class="activity-content">
                                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a>
                                    beatae
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">56 min</div>
                                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                <div class="activity-content">
                                    Voluptatem blanditiis blanditiis eveniet
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 hrs</div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content">
                                    Voluptates corrupti molestias voluptatem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">1 day</div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content">
                                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati
                                        voluptatem</a>
                                    tempore
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 days</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content">
                                    Est sit eum reiciendis exercitationem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">4 weeks</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content">
                                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                </div>
                            </div><!-- End activity item-->

                        </div>

                    </div>
                </div><!-- End Recent Activity Distribution -->

            </div><!-- End Right side columns -->
            </div>
        </div>
    </section>
@endsection
