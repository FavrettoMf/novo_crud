<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f4f7fa;
            color: #333;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            opacity: 0.3;
        }

        .content-container {
            position: relative;
            max-width: 900px;
            margin: 100px auto;
            padding: 40px;
            background: rgba(255, 255, 255, 0.98);
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card {
            margin: 20px auto;
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
        }

        .nav-link {
            color: #fff;
            font-size: 1.2rem;
        }

        .nav-link:hover {
            color: #ddd;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 25px;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .dashboard-title {
            font-size: 2.5rem;
            color: #333;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .card-title {
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .certificacao {
            background-color: #282c34;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .certificacao p {
            margin: 0;
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top border-bottom border-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gerenciamento Automotivo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com/@matheusfavretto6442" target="_blank">
                            <i class="fab fa-youtube"></i> YouTube
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light ms-3" href="{{ url('/') }}">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <img src="https://blog.simplusbr.com/wp-content/uploads/2020/09/oficina-mecanica-organizada.jpg" alt="Imagem de Fundo" class="background-image">

    <div class="content-container">
        <h1 class="dashboard-title">Gerenciamento Automotivo</h1>
        <div class="row justify-content-center">
            <!-- Card 1: Lista de Clientes -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center">
                    <img src="https://blog.usadosbr.com/wp-content/uploads/2016/06/oficina_mecanica_2.jpg.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Clientes</h5>
                        <a href="{{ url('/clientes') }}" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
            <!-- Card 2: Lista de Serviços -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center">
                    <img src="https://www.jrcastro.com.br/mecanica/imagens/oficina-mecanica-mais-proxima.jpg" class="card-img-top" alt="Imagem do cartão">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Serviços</h5>
                        <a href="{{ url('/servicos') }}" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
            <!-- Card 3: Gerenciar Veículos e Serviços -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center">
                    <img src="https://play-lh.googleusercontent.com/zAboa4aVE6Ix_c8Lae_5SfY-eI3dpOdJnj8amk-HyRFjnCDSaBRCJCOmySeteE4fAyg" class="card-img-top" alt="Imagem do cartão">
                    <div class="card-body">
                        <h5 class="card-title">Gerenciamento</h5>
                        <a href="{{ url('/dashboardGer') }}" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Certificação -->
    <section class="certificacao">
        <div class="container">
            <p class="mb-0">&copy; 2024 Gerenciamento Automotivo. Todos os direitos reservados.</p>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+NfW7N0C5N5G1c5F5F5s0G5K0L5N5F5" crossorigin="anonymous"></script>
</body>

</html>
