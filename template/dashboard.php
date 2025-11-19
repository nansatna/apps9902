<?php
// Data dummy siswa
$siswa = [
    ["nama" => "Inndry", "kelas" => "XII RPL"],
    ["nama" => "Adi", "kelas" => "XII RPL"],
    ["nama" => "Ahmad", "kelas" => "XII RPL"],
    ["nama" => "Depiyan", "kelas" => "XII RPL"],
    ["nama" => "Komeng", "kelas" => "XII RPL"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Siswa - PHP Native</title>

    <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Inter", sans-serif;
        }

        body {
            background: #f5f6f8;
            color: #333;
        }

        /* LAYOUT */
        .container {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            background: #ffffff;
            border-right: 1px solid #e5e7eb;
            padding: 25px;
        }

        /* LOGO */
        .logo-wrapper {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }

        .logo-circle {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #111827;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            font-weight: 700;
            font-size: 20px;
            margin-right: 12px;
        }

        .logo-text {
            font-size: 20px;
            font-weight: 600;
        }

        /* SIDEBAR MENU */
        .sidebar a {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 14px;
            padding: 10px 12px;
            text-decoration: none;
            color: #444;
            font-size: 15px;
            border-radius: 10px;
            transition: 0.15s ease;
        }

        .sidebar a:hover {
            background: #f3f4f6;
        }

        /* MAIN CONTENT */
        .main {
            flex: 1;
            padding: 32px;
        }

        .header {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 22px;
        }

        /* CARD */
        .card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            padding: 22px;
            border-radius: 14px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 18px;
        }

        table th, table td {
            padding: 14px;
            border-bottom: 1px solid #ececec;
            font-size: 14px;
        }

        table th {
            background: #f9fafb;
            font-weight: 600;
            color: #555;
            text-align: left;
        }

        table tr:hover td {
            background: #f6f8fa;
            transition: 0.2s;
        }

        /* BUTTON GROUP (BERDAMPINGAN) */
        .action-btns {
            display: flex;
            gap: 8px;
        }

        /* BUTTON */
        .btn {
            padding: 6px 12px;
            border-radius: 8px;
            border: 1px solid transparent;
            cursor: pointer;
            font-size: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-edit {
            background: #e8f0ff;
            color: #1d4ed8;
            border-color: #bfd3ff;
        }

        .btn-del {
            background: #ffecec;
            color: #dc2626;
            border-color: #ffbfbf;
        }

    </style>
</head>
<body>

<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar">

        <!-- LOGO -->
        <div class="logo-wrapper">
            <div class="logo-circle">P</div>
            <div class="logo-text">Pasundan</div>
        </div>

        <a href="#">📚 Data Siswa</a>
        <a href="#">👨‍🏫 Data Guru</a>
        <a href="#">🏫 Data Kelas</a>
        <a href="#">⚙️ Pengaturan</a>

    </div>

    <!-- MAIN -->
    <div class="main">
        <div class="header">Data Siswa</div>

        <div class="card">
            <h3 style="margin-bottom: 10px; font-size: 18px;">Daftar Siswa</h3>

            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th style="width: 150px;">Aksi</th>
                </tr>

                <?php 
                $no = 1;
                foreach ($siswa as $sw): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $sw["nama"]; ?></td>
                    <td><?= $sw["kelas"]; ?></td>
                    <td>
                        <div class="action-btns">
                            <button class="btn btn-edit">✏️</button>
                            <button class="btn btn-del">🗑️</button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>

            </table>
        </div>

    </div>

</div>

</body>
</html>