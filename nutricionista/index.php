<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Nutricionista</title>
</head>

<body>

   
    <!-- Main Content -->
    <div class="content p-4">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

            <h1>Nutricionista</h1>

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
                        <img src="../img/iff.jpg"" width="40">
                    </a>
                </div>
            </div>
        </nav>

        <!-- End of Navbar -->

        <main>
           

           

            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-header d-flex justify-content-between">
                            <h3>Pedidos recentes</h3>
                            <div>
                                <i class='bx bx-filter'></i>
                                <i class='bx bx-search'></i>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="img/bruno.png" class="rounded-circle" width="40">
                                        <p>bruno</p>
                                    </td>
                                    <td>14-08-2024</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/bruno.png" class="rounded-circle" width="40">
                                        <p>bruno</p>
                                    </td>
                                    <td>14-08-2024</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/bruno.png" class="rounded-circle" width="40">
                                        <p>bruno</p>
                                    </td>
                                    <td>14-08-2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Reminders -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-header d-flex justify-content-between">
                            <h3>Lembretes</h3>
                            <div>
                                <i class='bx bx-filter'></i>
                                <i class='bx bx-plus'></i>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class='bx bx-check-circle'></i> Comece nossa reunião
                                </div>
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class='bx bx-check-circle'></i> Analise Nosso Site
                                </div>
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class='bx bx-x-circle'></i> Agendamentos 
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
