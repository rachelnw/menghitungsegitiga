<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Segitiga</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            padding-top: 50px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hitung Luas Segitiga</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <div class="form-group">
                    <label for="alas<?= $i ?>">Alas Segitiga <?= $i ?>:</label>
                    <input type="number" class="form-control" id="alas<?= $i ?>" name="alas[]" required>
                </div>
                <div class="form-group">
                    <label for="tinggi<?= $i ?>">Tinggi Segitiga <?= $i ?>:</label>
                    <input type="number" class="form-control" id="tinggi<?= $i ?>" name="tinggi[]" required>
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<div class="mt-4">';
            echo '<table class="table">';
            echo '<thead class="thead-dark"><tr><th scope="col">No.</th><th scope="col">Alas</th><th scope="col">Tinggi</th><th scope="col">Luas</th></tr></thead>';
            $alas_array = $_POST['alas'];
            $tinggi_array = $_POST['tinggi'];
            for ($i = 0; $i < count($alas_array); $i++) {
                $alas = $alas_array[$i];
                $tinggi = $tinggi_array[$i];
                $luas = 0.5 * $alas * $tinggi;
                echo "<tr><td>" . ($i+1) . "</td><td>$alas</td><td>$tinggi</td><td>$luas</td></tr>";
            }
            echo '</table>';
            echo '</div>';
        }
        ?>
    </div>

    <!-- Tambahkan script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
