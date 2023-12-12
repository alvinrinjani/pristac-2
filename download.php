<?php

$programs = ['Visual Studio Code Win 10', 'Visual Studio Code Win 7', 'Node.js', 'Bash'];
$downloads = ['VSCodeUserSetup-x64-1.84.0.exe', 'VSCodeUserSetup-arm64-1.70.2.exe', 'node-v20.9.0-x64.msi', 'Git-2.42.0.2-64-bit.exe'];

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
            <h3 class="text-center text-primary">Silahkan Download Program Berikut</h3>
        </div>

        <hr>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Programs</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($programs); $i++): ?>
                <tr>
                    <th scope="row"><?= $i + 1; ?></th>
                    <td><?= $programs[$i]; ?></td>
                    <td><a href="assets/programs/<?= $downloads[$i]; ?>" download><button type="button" class="btn btn-primary">Download</button></a></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        
        <a href="materi-ajar.php"><button type="button" class="btn btn-danger">Lihat Materi Pelajaran</button></a>

    </div>
    <!-- End of Container -->


    <script src="assets/js/bootstrap.bundle.js"></script>
  </body>
</html>
