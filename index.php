<!doctype html>
<html lang="en">
  <head>
    <title>LEAP YEARS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
      <h1>LEAP YEARS</h1>
      <h2 class="text-muted">FROM 0 to 3000</h2>
      <div class="row">

    <!--PHP STARTS-->
    <!--PHP STRUCTURE
    FOR#1 LOOP - 3000 'YEARS'
      IF#1 FUNCTION
      END IF#1
    END FOR#1
    -->

    <?php
    # We define the variable $counter to make colour cards
      $counter = 0;
      
    /*We define the variable $year inside a FOR loop
    $year will be used to show what year is leap
    */ 
    # STARTS FUNCTION FOR#1
      for ($year = 1;$year <= 3000; $year++){
    /*We stablish the conditions for leap years
        A Must be divisible by 4 ($year%4==0)
        B Except for years that are exactly divisible by 100 ($year%!==0)
        C These centurials are leap if they are exactly divisible by 400 ($year%400==0)
        A AND (B OR C)
    */
    # STARTS FUNCTION IF#1
        if ($year%4==0 && (($year%100!==0) || $year%400==0)){
    # Increment the value of $counter by 1 on each loop that enters this condition
          $counter++;
    /* Presentation
        + pair $counter BLUE TEXT-WHITE
        + odd $counter YELLOW
    */
    # STARTS FUNCTION IF#2
          if ($counter%2==0){
    ?>
            <div class="card col-sm-2 col-mb-3 text-white bg-info">
    <?php
          } else {
    ?>
            <div class="card col-sm-2 col-mb-3 bg-warning">
    <?php
          }
    # END FUNCTION IF#2
    ?>
              <div class="card-header">
                <b><?= $year ?></b> <!--Insert year-->
              </div>
            </div> <!--END CARD-->
    <?php
        }
    #END FUNCTION IF#1
      }
    #END FUNCTION FOR#1
  ?>
      </div> <!--END ROW-->
    </div> <!--END CONTAINER-->
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
© 2018 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
