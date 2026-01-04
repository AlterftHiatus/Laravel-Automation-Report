<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            margin: 0;
            padding: 0;
        }

        /* --- LAYOUT ASLI ANDA --- */
        .header-container {
            width: 100%;
            position: relative;
        }

        .yellow-bar {
            background-color: #d4c017;
            height: 40px;
            width: 100%;
        }

        .content-table {
            width: 100%;
            border-collapse: collapse;
        }

        .logo-section {
            width: 40%;
            padding-left: 40px;
            vertical-align: middle;
        }

        .info-section {
            width: 50%;
            text-align: right;
            vertical-align: middle;
            padding-right: 60px;
        }

        .green-bar-section {
            position: absolute;
            width: 3%;
            background-color: #0b7d3f;
            height: 150px;
            top: 0;
            right: 120px;
            text-align: center;
            vertical-align: top;
            padding-top: 15px;
            padding-bottom: 25px;
        }

        .company-name {
            color: #0b7d3f;
            font-weight: bold;
            font-size: 18px;
            margin-top: 10px;
            letter-spacing: 1px;
        }

        .info-text {
            font-size: 12px;
            color: #333;
            margin-bottom: 8px;
            border-bottom: 2px solid #999;
            display: inline-block;
            width: 100%;
            padding-bottom: 5px;
        }

        .address-text {
            font-size: 12px;
            color: #333;
            margin-top: 5px;
            line-height: 1.4;
        }

        .icon-box {
            color: white;
            font-size: 20px;
            margin-bottom: 25px;
        }

        footer {
            border-top: 2px solid #000;
            margin-top: 40px;
            font-size: 10px;
            text-align: center;
            color: #666;
            padding-top: 10px;
        }

        .watermark {
            position: fixed;
            top: 20%;
            left: 35%;
            opacity: 0.08;
            z-index: -1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 12px;
        }

        table,
        th,
        td {
            border: 1px solid #000;
        }

        th,
        td {
            padding: 8px;
            vertical-align: top;
        }
    </style>
</head>

<body>

    <header class="header-container">
        <div class="yellow-bar"></div>

        <table class="content-table" style="border:none;">
            <tr style="border:none;">
                <td class="logo-section" style="border:none;">
                    <img src="{{ asset('storage/images/logo_cakra.png') }}" alt="Logo" style="width: 150px;">
                </td>

                <td class="info-section" style="border:none;">
                    <div class="info-text">+62 856 4042 4888</div>
                    <div class="info-text">info@cakrateknika.com</div>
                    <div class="address-text">
                        Jalan Bukit Wato-Wato VII Blok B2A/14<br>
                        Permata Puri, Beringin, Ngaliyan, Semarang
                    </div>
                </td>

                <td class="green-bar-section" style="border:none;">
                    <div class="icon-box"></div>
                    <div class="icon-box">☏</div>
                    <div class="icon-box">☏</div>
                    <div class="icon-box">☏</div>
                </td>
            </tr>
        </table>
    </header>

    <div class="watermark">
        <img src="{{ asset('storage/images/logo_cakra.png') }}" width="400">
    </div>

    <div style="padding: 0 40px;">
        @include('laporan._content')
    </div>

    <footer>
        Ini hanya preview — bukan dokumen resmi
    </footer>

    <div class="footer-container no-print">
    </div>
</body>

</html>
