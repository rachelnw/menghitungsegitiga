<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Segitiga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .result {
            margin-top: 20px;
        }
        .result-item {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .result-item p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hitung Luas Segitiga</h2>
        <div class="result">
            <?php
            // Definisikan data alas dan tinggi dalam array
            $data_segitiga = array(
                array("alas" => 5, "tinggi" => 3),
                array("alas" => 7, "tinggi" => 4),
                array("alas" => 6, "tinggi" => 2),
                array("alas" => 8, "tinggi" => 5),
                array("alas" => 9, "tinggi" => 6)
            );

            // Fungsi untuk menghitung luas segitiga
            function hitungLuasSegitiga($alas, $tinggi) {
                return 0.5 * $alas * $tinggi;
            }

            // Menghitung luas segitiga untuk setiap data dan menampilkannya
            foreach ($data_segitiga as $data) {
                $luas = hitungLuasSegitiga($data['alas'], $data['tinggi']);
                echo "<div class='result-item'>";
                echo "<p>Alas: {$data['alas']}</p>";
                echo "<p>Tinggi: {$data['tinggi']}</p>";
                echo "<p>Luas: $luas</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
