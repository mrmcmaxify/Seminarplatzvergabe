<?php require __DIR__ . "/../layout/header.php"; ?>

 <!-- Kopfzeile mit Info -->
    <div class="container">
      <div class="py-5 text">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Seminarplatzvergabe der wirtschaftswissenschaftlichen Fakultät</h2>
        
      </div>

      <!-- Formularfelder -->
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Mitarbeiter hinzufügen</h4>
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
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
               Gültige Email-Adresse wird benötigt.
              </div>
            </div>
            <br/>
            <br/>
            <br/>
            <button class="btn btn-primary btn-lg" type="submit" data-toggle="modal" data-target="#exampleModal">Seminar anlegen</button>
            <input class="btn btn-primary btn-lg" type="reset" value="Abbrechen">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                 Seminar anlegen </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  
  <!-- Pop-Up bei Betätigung des "Seminar anlegen"-Buttons -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Ein Registrierungslink wurde an die angegebene Adresse gesenndet.
        Bitte bestätigen Sie diesen, um den Registrierungsprozess abzuschließen.
        <br/>
        <br/>
        Freundliche Grüße
        Ihr Verwaltungsteam
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
            <?php require(__DIR__ . "/../layout/footer.php"); ?>