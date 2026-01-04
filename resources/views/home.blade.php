<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    <h1>Automation Report</h1>

    <div class="menu-container">

        <!-- Button 1 -->
        <div class="dropdown">
            <button class="dropdown-btn">Pesawat Tenaga Produksi</button>
            <div class="dropdown-content">
                <a href="/laporan/create">Mesin Produksi - Concrete Mixer</a>
                <a href="#">Menu 1 - Opsi 2</a>
                <a href="#">Menu 1 - Opsi 3</a>
                <a href="#">Menu 1 - Opsi 4</a>
                <a href="#">Menu 1 - Opsi 5</a>
            </div>
        </div>

        <!-- Button 2 -->
        <div class="dropdown">
            <button class="dropdown-btn">Menu 2</button>
            <div class="dropdown-content">
                <a href="#">Menu 2 - Opsi 1</a>
                <a href="#">Menu 2 - Opsi 2</a>
                <a href="#">Menu 2 - Opsi 3</a>
                <a href="#">Menu 2 - Opsi 4</a>
                <a href="#">Menu 2 - Opsi 5</a>
            </div>
        </div>

        <!-- Button 3 -->
        <div class="dropdown">
            <button class="dropdown-btn">Menu 3</button>
            <div class="dropdown-content">
                <a href="#">Menu 3 - Opsi 1</a>
                <a href="#">Menu 3 - Opsi 2</a>
                <a href="#">Menu 3 - Opsi 3</a>
                <a href="#">Menu 3 - Opsi 4</a>
                <a href="#">Menu 3 - Opsi 5</a>
            </div>
        </div>

        <!-- Button 4 -->
        <div class="dropdown">
            <button class="dropdown-btn">Menu 4</button>
            <div class="dropdown-content">
                <a href="#">Menu 4 - Opsi 1</a>
                <a href="#">Menu 4 - Opsi 2</a>
                <a href="#">Menu 4 - Opsi 3</a>
                <a href="#">Menu 4 - Opsi 4</a>
                <a href="#">Menu 4 - Opsi 5</a>
            </div>
        </div>

        <!-- Button 5 -->
        <div class="dropdown">
            <button class="dropdown-btn">Menu 5</button>
            <div class="dropdown-content">
                <a href="#">Menu 5 - Opsi 1</a>
                <a href="#">Menu 5 - Opsi 2</a>
                <a href="#">Menu 5 - Opsi 3</a>
                <a href="#">Menu 5 - Opsi 4</a>
                <a href="#">Menu 5 - Opsi 5</a>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
