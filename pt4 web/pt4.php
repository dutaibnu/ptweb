<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Pes - Beranda</title>
</head>
<body>
    
    <!-- Pop-up box -->
    <!-- ... (Kode pop-up Anda) ... -->
    <div id="popup" class="overlay">
        <div class="window">
          <a href="#" id="closePopup" class="close-button" title="Close">X</a>
          <h1>Selamat Datang di Web Rental Pes Jago</h2>
          <p>Terima kasih telah mengunjungi situs web saya.</p>
        </div>
    </div>
    <nav class="navbar">
        <!-- ... (Kode navbar Anda) ... -->
        <div class="container">
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about-me">About Me</a></li>
                <li><a href="#contact">Hubungi Saya</a></li>
            </ul>
        </div>
    </nav>
    <div class="toggle-container">
        <!-- ... (Kode Dark Mode toggle Anda) ... -->
        <label for="mode-toggle">Dark Mode</label>
        <input type="checkbox" id="mode-toggle">
    </div>
    <div class="content">
        <h1>RENTAL PES JAGO</h1>
    </div>

    <!-- Form Input -->
    <div class="container">
        <h2>Form Input</h2>

        <?php
        // Cek apakah data form telah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil dan tampilkan data dari input
            $nama = $_POST["nama"];
            $usia = $_POST["usia"];
            $katasandi = $_POST["katasandi"];
            $email = $_POST["email"];
            $pilihan = isset($_POST["pilihan"]) ? $_POST["pilihan"] : "Tidak";
            $komentar = $_POST["komentar"];

            // Tampilkan data yang dimasukkan oleh pengguna
            echo "<h3>Data yang Dimasukkan:</h3>";
            echo "Nama: $nama<br>";
            echo "Usia: $usia tahun<br>";
            echo "Kata Sandi: $katasandi (tidak ditampilkan)<br>";
            echo "Email: $email<br>";
            echo "Pilihan: $pilihan<br>";
            echo "Komentar: $komentar<br>";
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <!-- Text Input -->
            <label for="text-input">Nama:</label>
            <input type="text" id="text-input" name="nama" placeholder="Masukkan nama Anda"><br>

            <!-- Number Input -->
            <label for="number-input">Usia:</label>
            <input type="number" id="number-input" name="usia" min="0" max="120"><br>

            <!-- Password Input -->
            <label for="password-input">Kata Sandi:</label>
            <input type="password" id="password-input" name="katasandi"><br>

            <!-- Email Input -->
            <label for="email-input">Email:</label>
            <input type="email" id="email-input" name="email" placeholder="Masukkan alamat email Anda"><br>

            <!-- Checkbox Input -->
            <label for="checkbox-input">Pilihan Anda:</label>
            <input type="checkbox" id="checkbox-input" name="pilihan" value="Ya">
            <label for="checkbox-input">Ya</label><br>

            <!-- Textarea Input -->
            <label for="textarea-input">Komentar:</label>
            <textarea id="textarea-input" name="komentar" rows="4" cols="50" placeholder="Tulis komentar Anda di sini"></textarea><br>

            <input type="submit" value="Kirim">
        </form>
    </div>

    <main>
        <!-- ... (konten yang ada sebelumnya) ... -->
        <section id="home">
            <div class="container">
                <h2>Selamat datang di Rental Pes</h2>
                <p>Kami menyediakan berbagai jenis pes untuk disewa dengan harga yang terjangkau.</p>
                <div class="photo-gallery">
                    <div class="gallery-item">
                        <img src="foto1.jpeg" alt="Foto 1" class="gallery-image">
                    </div>
                    <div class="gallery-item">
                        <img src="foto4.jpeg" alt="Foto 2" class="gallery-image">
                    </div>
                    <div class="gallery-item">
                        <img src="foto2.jpeg" alt="Foto 3" class="gallery-image">
                    </div>
                    <div class="gallery-item">
                        <img src="foto5.jpeg" alt="Foto 4" class="gallery-image">
                    </div>
                    <div class="gallery-item">
                        <img src="foto3.jpeg" alt="Foto 5" class="gallery-image">
                    </div>
                    <div class="gallery-item">
                        <img src="foto 6.jpeg" alt="Foto 6" class="gallery-image">
                    </div>
                </div>
            </div>
        </section>

        <section id="about-me">
            <div class="container">
                <h2>About Me</h2>
                <img width="250px" src="WhatsApp Image 2023-09-19 at 20.11.52.jpeg" alt="Your Photo" class="about-photo">
                <p>IBNU GILANG PRADUTA CIPTA</p>
                <p>SAYA MEMPUNYAI RENTAL PES YANG SANGAT MEWAH.AYOO KE RENTAL PES SAYA.</p>
                <a href="#contact" class="btn">Hubungi Saya</a>
            </div>
        </section>
    </main>

    <footer>
        <!-- ... (konten yang ada sebelumnya) ... -->
        <div class="container">
            <section id="contact">
                <h2>Hubungi Saya</h2>
                <p>Email: dutaibnu16@gmail.com</p>
                <p>Telepon:081250883422</p>
                <p>Alamat: Jalan Elang</p>
                <p>Instagram: <a href="https://www.instagram.com/duta_ibnu/" target="_blank">your_instagram_username</a></p>
            </section>
        </div>
        <p>&copy; 2023 Rental Pes</p>   
    </footer>

</body>
</html>
