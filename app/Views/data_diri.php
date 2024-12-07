<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <style>
        /* Global Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f7f7f7;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-wrap: wrap; /* Responsif */
        }
        .header {
            background: #4CAF50;
            color: #fff;
            padding: 20px;
            text-align: center;
            width: 100%;
        }
        .header h1 {
            margin: 0;
            font-size: 2rem;
        }
        .content {
            flex: 2; /* Porsi lebih besar untuk teks */
            padding: 20px;
        }
        .content p {
            font-size: 1.2rem;
            margin: 10px 0;
        }
        .image-container {
            flex: 1; /* Porsi lebih kecil untuk gambar */
            background: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .image-container img {
            width: 100%; /* Gambar memenuhi kontainer */
            aspect-ratio: 4 / 3; /* Rasio 4:3 */
            object-fit: cover; /* Memastikan gambar memenuhi rasio tanpa distorsi */
            border-radius: 10px; /* Membuat gambar sedikit membulat */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .footer {
            background: #f1f1f1;
            text-align: center;
            padding: 10px;
            font-size: 0.9rem;
            color: #777;
            width: 100%;
        }
        .footer a {
            text-decoration: none;
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Data Diri</h1>
        </div>

        <!-- Content -->
        <div class="content">
            <p><strong>Nama   :</strong> Fikri Azka Maulana</p>
            <p><strong>NIM    :</strong> 23.240.0021</p>
            <p><strong>Kelas  :</strong> 3P41</p>
            <p><strong>Jurusan:</strong> Teknik Informatika</p>
        </div>

        <!-- Image Section -->
        <div class="image-container">
            <img src="https://rakyatbenteng.disway.id/upload/0fb2c67f47f86ea83bd7c72bd501ae77.jpg" alt="Profile Picture">
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>© 2024 Fikri Azka Maulana. All Rights Reserved. | <a href="welcome_message.php">Kembali ke Beranda</a></p>
        </div>
    </div>
</body>
</html>
