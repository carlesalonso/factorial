<!doctype html>
<html lang="en">
  <head>
    <title>Factorial</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container">
        <h1 class="text-center">Factorial</h1>
    </div>

<?php
    $n = 1;
    while ($n <= 100):
        $res = 1;
        $str = "1";
        $f = 2;
        while ($f<=$n) {
            $res = $res * $f;
            $str = $str." * $f";
            $f++;
        }
?>
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"><?= $n ?>!</h4>
            <h6 class="card-subtitle text-muted">= <?= $str ?></h6>
          </div>
          <div class="card-body">
            <p class="card-text">Resultat: <?= $res ?></p>
          </div>
        </div>
<?php
        $n++;
    endwhile;
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>