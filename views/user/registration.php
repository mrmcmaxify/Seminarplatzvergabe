<?php require __DIR__ . "/../layout/header.php"; ?>


    <div class="container">
      <div class="py-5 text">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Registrierung</h2>
        <p class="lead">Irgend eine Info</p>
      </div>

      
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Persönliche Daten</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Vorname</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Vorname wird benötigt.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Nachname</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Nachname wird benötigt.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">RZ-Kennung</label>
              <input type="email" class="form-control" id="email" placeholder="">
              <div class="invalid-feedback">
               RZ-Kennung wird benötigt.
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
               Gültige Email-Adresse wird benötigt.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Studiengang</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Wähle...</option>
                  <option>Bachelor - Business Administration and Economics (BWL/VWL)</option>
                  <option>Bachelor - Wirtschaftsinformatik/Information Systems</option>
                  <option>Bachelor - Kulturwirtschaft</option>
                  <option>Master - Business Administration (BWL)</option>
                  <option>Master - International Economics and Business</option>
                  <option>Master - Wirtschaftsinformatik</option>
                  <option>Master - Kulturwirtschaft</option>
                </select>
                <div class="invalid-feedback">
                  Bitte wählen Sie Ihr aktuelles Fachsemester aus.
                </div>
              </div>
            </div>

             <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Fachsemester</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Wähle...</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                </select>
                <div class="invalid-feedback">
                  Bitte wählen Sie Ihr aktuelles Fachsemester aus.
                </div>
              </div>
            </div>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Bachelor</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Master</label>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Bis jetzt erreichte ECTS</label>
              <input type="email" class="form-control" id="email" placeholder="">
              <div class="invalid-feedback">
               ECTS Anzahl wird benötigt.
              </div>
            </div>



            <h4 class="mb-3">Passwort</h4>


<div class="row">
  <div class="col-md-6 mb-3">
    <label for="cc-name">Passwort</label>
    <input type="text" class="form-control" id="cc-name" placeholder="" required>
    <small class="text-muted">Das Passwort muss aus mindestens 8 Zeichen bestehen.</small>
    <div class="invalid-feedback">
    Das Passwort muss aus mindestens 8 Zeichen bestehen.
    </div>
  </div>
  <div class="col-md-6 mb-3">
    <label for="cc-number">Passwort wiederholen</label>
    <input type="text" class="form-control" id="cc-number" placeholder="" required>
    <div class="invalid-feedback">
      Die Passwörter stimmen nicht überein.
    </div>
  </div>
</div>

<hr class="mb-4">
<button class="btn btn-primary btn-lg btn-block" type="submit">Registrieren</button>








    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>


<?php require(__DIR__ . "/../layout/footer.php"); ?>

