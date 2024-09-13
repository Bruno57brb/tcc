<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Responsive Dashboard Design #2 | AsmrProg</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px;">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
            <i class='bx bx-code-alt fs-2'></i>
            <span class="fs-4 ms-2"><span>Asmr</span>Prog</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link link-dark">
                    <i class='bx bxs-dashboard'></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class='bx bx-store-alt'></i> Shop
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark active">
                    <i class='bx bx-analyse'></i> Analytics
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class='bx bx-message-square-dots'></i> Tickets
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class='bx bx-group'></i> Users
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class='bx bx-cog'></i> Settings
                </a>
            </li>
        </ul>
        <hr>
        <a href="#" class="nav-link link-dark">
            <i class='bx bx-log-out-circle'></i> Logout
        </a>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content p-4">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class='bx bx-menu'></i>
                </button>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class='bx bx-search'></i></button>
                </form>
                <div class="d-flex">
                    <a href="#" class="nav-link">
                        <i class='bx bx-bell'></i>
                        <span class="badge bg-danger">12</span>
                    </a>
                    <a href="#" class="nav-link">
                        <img src="images/logo.png" class="rounded-circle" width="40">
                    </a>
                </div>
            </div>
        </nav>

        <!-- End of Navbar -->

        <main>
            <div class="d-flex justify-content-between align-items-center my-4">
                <div>
                    <h1>Dashboard</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Analytics</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
                <a href="#" class="btn btn-primary">
                    <i class='bx bx-cloud-download'></i> Download CSV
                </a>
            </div>

            <!-- Insights -->
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class='bx bx-calendar-check fs-1'></i>
                            <h3 class="card-title">1,074</h3>
                            <p class="card-text">Paid Order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class='bx bx-show-alt fs-1'></i>
                            <h3 class="card-title">3,944</h3>
                            <p class="card-text">Site Visit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class='bx bx-line-chart fs-1'></i>
                            <h3 class="card-title">14,721</h3>
                            <p class="card-text">Searches</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <i class='bx bx-dollar-circle fs-1'></i>
                            <h3 class="card-title">$6,742</h3>
                            <p class="card-text">Total Sales</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Insights -->

            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-header d-flex justify-content-between">
                            <h3>Recent Orders</h3>
                            <div>
                                <i class='bx bx-filter'></i>
                                <i class='bx bx-search'></i>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="images/profile-1.jpg" class="rounded-circle" width="40">
                                        <p>John Doe</p>
                                    </td>
                                    <td>14-08-2023</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="images/profile-1.jpg" class="rounded-circle" width="40">
                                        <p>John Doe</p>
                                    </td>
                                    <td>14-08-2023</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="images/profile-1.jpg" class="rounded-circle" width="40">
                                        <p>John Doe</p>
                                    </td>
                                    <td>14-08-2023</td>
                                    <td><span class="badge bg-info">Processing</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Reminders -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-header d-flex justify-content-between">
                            <h3>Reminders</h3>
                            <div>
                                <i class='bx bx-filter'></i>
                                <i class='bx bx-plus'></i>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class='bx bx-check-circle'></i> Start Our Meeting
                                </div>
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class='bx bx-check-circle'></i> Analyse Our Site
                                </div>
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class='bx bx-x-circle'></i> Play Football
                                </div>
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End of Reminders -->
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
