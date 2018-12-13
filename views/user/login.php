<?php require __DIR__ . "/../layout/header.php"; ?>



<?php if (!empty($error)): ?>
  <p>
    Die Kombination aus Benutzername und Passwort ist falsch.
  </p>
<?php endif; ?>

<form method="POST" method="login" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-md-3">
      Benutzername:
    </label>
    <div class="col-md-9">
      <input type="text" name="username" class="form-control" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">
      Passwort:
    </label>
    <div class="col-md-9">
      <input type="password" name="password" class="form-control" />
    </div>
  </div>

  <input type="submit" value="Einloggen" class="btn btn-primary" />
  <input type="submit" value="Passwort vergessen" class="btn btn-primary" />
</form>

<br/>
<br/>
<br/>

<div class="container">
  <h2>Fristen</h2>
  <p>Irgend eine Info</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th></th>
        <th>Von:</th>
        <th>Bis:</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Anmeldefrist für Seminare:</td>
        <td>tt.mm.jjjj</td>
        <td>tt.mm.jjjj</td>
      </tr>
      <tr>
        <td>Bewerbungsfrist:</td>
        <td>tt.mm.jjjj</td>
        <td>tt.mm.jjjj</td>
      </tr>
      <tr>
        <td>Annahme-/Absagefrist:</td>
        <td>tt.mm.jjjj</td>
        <td>tt.mm.jjjj</td>
      </tr>
      <tr>
        <td>Frist für die zweite Vergabe:</td>
        <td>tt.mm.jjjj</td>
        <td>tt.mm.jjjj</td>
      </tr>
      <tr>
        <td>Zweite Annahme-/Absagefrist:</td>
        <td>tt.mm.jjjj</td>
        <td>tt.mm.jjjj</td>
      </tr>
    </tbody>
  </table>
</div>





<div class="container">
  <h2>Angebotene Seminare</h2>
  <p>Irgend eine Info</p> 
  <p>
    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="true"  aria-controls="multiCollapseExample1">Bachelor</a>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Master</button>
  </p>

  <div class="collapse multi-collapse" id="multiCollapseExample1">
    <div class="card card-body">
      <div class="Bachelor">
      <div class="accordion" id="Bachelor">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                123456 - Seminar Wirtschaftsinformatik - Theorien
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#Bachelor" style="">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                654321 - Seminar BAE - Marketing
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#Bachelor" style="">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                123654 - Seminar KuWi - Irgendwas
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#Bachelor">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class="collapse multi-collapse" id="multiCollapseExample2">
    <div class="card card-body">
      <div class="Master">
      <div class="accordion" id="Master">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                111111 - Seminar Wirtschaftsinformatik - Master
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#Master" style="">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                222222 - Seminar BAE - Master
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#Master" style="">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                333333 - Seminar KuWi - Master
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#Master">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>



<?php require __DIR__ . "/../layout/footer.php"; ?>
