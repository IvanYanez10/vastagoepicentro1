<div class="col-md-8 order-md-1">
  <h4 class="mb-3">Contacto</h4>

  <form class="needs-validation" novalidate="" action="post">

    <div class="row">
      <div class="col-md-6 mb-3">
        <input type="text" class="form-control" id="firstName" placeholder="Nombre" value="" required="">
        <div class="invalid-feedback">
          Valid first name is required.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <input type="email" class="form-control" id="email" placeholder="Correo electronico" value="" required="">
        <div class="invalid-feedback">
          Valid last name is required.
        </div>
      </div>
    </div>

    <div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="username" placeholder="Asunto" required="">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="username" placeholder="Celular" required="">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>

          <div class="col-md-12 mb-3">
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Comentarios..." rows="3"></textarea>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
      </div>

    <button class="btn btn-primary btn-lg btn-block mb-3" style="width: 100px" type="submit">Enviar</button>

  </form>
</div>
