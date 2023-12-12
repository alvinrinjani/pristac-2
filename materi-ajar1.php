<?php

$mainCourse = 'Prologue';
$content = ['Installasi Program', 'Pengenalan Bash', 'Pengenalan Visual Studio Code', 'Pengenalan JavaScript', 'JavaScript File', 'JavaScript Output'];
$highlight = [
    "- Visual Studio Code
    <br>
    - NodeJs
    <br>
    - Bash Terminal
    ",
    "<span class='text-danger'>Perhatikan contoh dan penjelasan guru!<span>",
    "<span class='text-danger'>Perhatikan contoh dan penjelasan guru!<span>",
    "- JavaScript is the world's most popular programming language.
    <br>
    - JavaScript is the programming language of the Web.
    <br>
    - JavaScript is work from any browser.
    <br>
    - JavaScript is easy to learn <s>(but also hard to master)</s>.
    ",
    "*.js",
    "console.log();"
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
            <h5 class="text-center">(Pertemuan 1: <?= $mainCourse; ?>)</h5>
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
            <div class="col text-end"><a href="materi-ajar2.php"><button type="button" class="btn btn-success">Next</button></a></div>
        </div>

    </div>
    <!-- End of Container -->

    <script src="assets/js/bootstrap.bundle.js"></script>
  </body>
</html>
