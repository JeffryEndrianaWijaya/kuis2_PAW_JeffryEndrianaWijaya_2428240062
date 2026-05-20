<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Fakultas</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    {{-- Custom CSS --}}
    <style>

        :root{
            --bg: #f8fafc;
            --card: #ffffff;
            --text: #0f172a;
            --muted: #64748b;
            --border: #e2e8f0;

            /* HEADER & FOOTER */
            --dark: #0f172a;
            --dark-soft: #1e293b;
        }

        *{
            box-sizing: border-box;
        }

        body{
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text);
        }

        /* NAVBAR */
        .navbar{
            background-color: var(--dark);
            padding: 14px 0;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        .navbar-brand{
            font-size: 20px;
            font-weight: 700;
            color: white !important;
            letter-spacing: -0.5px;
        }

        .nav-link{
            color: rgba(255,255,255,0.75) !important;
            font-weight: 500;
            transition: 0.2s ease;
        }

        .nav-link:hover{
            color: white !important;
        }

        /* BUTTON */
        .btn-main{
            background-color: white;
            color: var(--dark);
            border-radius: 12px;
            padding: 10px 18px;
            font-weight: 600;
            border: none;
            transition: 0.2s ease;
        }

        .btn-main:hover{
            background-color: #e2e8f0;
            color: var(--dark);
        }

        /* MAIN */
        main{
            min-height: 100vh;
        }

        /* CARD */
        .card{
            background-color: var(--card);
            border: 1px solid var(--border);
            border-radius: 20px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.05);
        }

        /* INPUT */
        .form-control,
        .form-select{
            border-radius: 12px;
            border: 1px solid var(--border);
            padding: 12px;
        }

        .form-control:focus,
        .form-select:focus{
            border-color: var(--dark-soft);
            box-shadow: none;
        }

        /* FOOTER */
        footer{
            background-color: var(--dark);
            border-top: 1px solid rgba(255,255,255,0.05);
            padding: 24px 0;
            margin-top: 60px;
        }

        footer p{
            margin: 0;
            color: rgba(255,255,255,0.65);
            font-size: 14px;
        }

    </style>

</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg">

        <div class="container">

            {{-- LOGO --}}
            <a class="navbar-brand" href="/">
                SI Fakultas
            </a>

            {{-- TOGGLE --}}
            <button class="navbar-toggler border-0 shadow-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            {{-- MENU --}}
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/fakultas">
                            Fakultas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodi.index') }}">
                            Prodi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodi.create') }}">
                            Tambah Prodi
                        </a>
                    </li>

                    <li class="nav-item ms-lg-2">
                        <a href="/fakultas/create"
                           class="btn btn-main">
                            Tambah Fakultas
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    {{-- CONTENT --}}
    <main>
        {{ $slot }}
    </main>


    {{-- FOOTER --}}
    <footer>

        <div class="container text-center">

            <p>
                © {{ date('Y') }} Sistem Informasi Fakultas
            </p>

        </div>

    </footer>


    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>