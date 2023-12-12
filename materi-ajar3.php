<?php

$mainCourse = 'Array';

$content = ['Array', 'Contoh', 'Index Array', 'Mengakes Nilai Array'];
$highlight = [
    "An array is a special variable, which can hold more than one value.",
    "const namaArray = [];",
    "Index atau Nomor Urut sebuah Array dimulai dari angka 0",
    "console.log(namaArray[index]);"
];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRISTAC 2</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
  </head>
  <body>
    <!-- Container Begin -->
    <div class="container">
        <div class="row mt-5">
            <h3 class="text-center text-primary">Materi Pelajaran IT</h3>
            <h5 class="text-center">(Pertemuan 3: <?= $mainCourse; ?>)</h5>
        </div>

        <hr>
        
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Content</th>
                    <th scope="col">Highlight</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($content); $i++): ?>
                    <tr>
                        <td><?= $content[$i]; ?></td>
                        <td><?= $highlight[$i]; ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>

        <div class="row justify-content-between">
            <div class="col"><a href="materi-ajar.php"><button type="button" class="btn btn-danger">Back</button></a></div>
            <div class="col text-end"><a href="materi-ajar4.php"><button type="button" class="btn btn-success">Next</button></a></div>
        </div>

    </div>
    <!-- End of Container -->

    <script src="assets/js/bootstrap.bundle.js"></script>
  </body>
</html>
