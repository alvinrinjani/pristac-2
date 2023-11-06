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
            <h3 class="text-center text-primary">Materi Pelajaran IT<br><span class="text-danger h1">PRISTAC-2</span></h3>
        </div>

        <hr>
        
       <ul>
        <?php for($i = 1; $i <= 10; $i++): ?>
            <li><a href="materi-ajar<?= $i; ?>.php" style="text-decoration: none;">Pertemuan ke-<?= $i; ?></a></li>
        <?php endfor; ?>
       </ul>

    </div>
    <!-- End of Container -->

    <script src="assets/js/bootstrap.bundle.js"></script>
  </body>
</html>
