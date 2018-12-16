<?php require __DIR__ . "/../layout/header.php"; ?>

<!-- Kopfzeile mit Info -->
<div class="container">
      <div class="py-5 text">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Seminarplatzvergabe der Wirtschaftswissenschaftlichen Fakultät</h2>
        <p class="lead">Lehrstuhl XY</p>
      </div>

<!-- Formularfelder -->
<div class="col-md-8 order-md-1">
          <h4 class="mb-3">Seminar anlegen</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="seminarname">Name des Seminars</label>
                <input type="text" class="form-control" id="seminarname" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Seminarname wird benötigt.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="count">Teilnehmerzahl</label>
                <input type="number" min="1" class="form-control" id="count" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Teilnehmberanzahl wird benötigt.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="semester">Angebotenes Semester</label>
                <select class="custom-select d-block w-100" id="semester" required>
                  <option value="">Wähle...</option>
                  <option>SoSe 19</option>
                  <option>WiSe 19/20</option>
                  <option>SoSe 20</option>
                  <option>WiSe 20/21</option>
                  <option>SoSe 21</option>
                  <option>WiSe 21/22</option>
                  <option>SoSe 22</option>
                </select>
                <div class="invalid-feedback">
                  Bitte wählen Sie das Semester aus, in dem das Seminar angeboten werden soll.
                </div>
              </div>
            </div>

             <div class="row">
              <div class="col-md-5 mb-3">
                <label for="motivation">Motivationsschreiben benötigt:</label>
                <select class="custom-select d-block w-100" id="motivation" required>
                  <option value="">Wähle...</option>
                  <option>ja</option>
                  <option>nein</option>
                </select>
                <div class="invalid-feedback">
                  Bitte geben Sie an, ob Studierende für ihre Bewerbung ein Motivationsschreiben benötigen.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="description">Seminarbeschreibung</label>
              <input type="text" class="form-control" id="description" placeholder="">
              <div class="invalid-feedback">
               Bitte geben Sie eine ausführliche Beschreibung Ihres Seminares an.
              </div>
            </div>
            <br/>
            <br/>
            <br/>
            <button class="btn btn-primary btn-lg" type="submit">Seminar anlegen</button>
            <input class="btn btn-primary btn-lg" type="reset" value="Abbrechen">
<?php require __DIR__ . "/../layout/footer.php"; ?>