<footer class="mt-5">

  <div class="container-fluit footer-top-social">
    <div class="row pt-2 pb-3">
      <div class="col text-center"><span>Visto en</span></div>
    </div>
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
      <div class="col-6 col-md-4 text-center">
        <a href="">
          <img src="{{ asset('images/El_Pais-logo.png') }}" height="45" alt="">
        </a>
      </div>
      <div class="col-6 col-md-4 text-center">
        <a href="">
          <img src="{{ asset('images/Logo_Elmundo.png') }}" height="60" alt="">
        </a>
      </div>
      <div class="col-6 col-md-4 text-center">
        <a href="">
          <img src="{{ asset('images/el-periodico-logo-png-transparent.png') }}" height="35" alt="">
        </a>
      </div>
    </div>  
  </div>

  <div class="container pt-5">
    <div class="row justify-content-end mb-4">
      
      <div class="col-md-4 text-left div-social">
        <ul>
          <li><h3>Recursos</h3></li>
          <li><a href="">FAQ</a></li>
          <li><a href="">Políticas de privacidad</a></li>
          <li><a href="">Políticas de cookies</a></li>
        </ul>
      </div>
      
      <div class="col-md-4 text-left div-social">
        <ul>
          <li><h3>Lofinn</h3></li>
          <li><a href="">Únete a nosotros</a></li>
          <li><a href="">Contacta</a></li>
        </ul>
      </div>
      
      <div class="col-md-4 text-left div-social">
        <h3>Próximos eventos y promociones</h3>
        <form id="form-events">
          <div class="form-row align-items-center">
            <div class="col-auto">
              <label class="sr-only" for="">ingresa tu correo electrónico</label>
              <input type="text" class="form-control mb-2" id="" placeholder="ingresa tu correo electrónico">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-dark mb-2">Enviar</button>
            </div>
          </div>
        </form>
        <h3 class="pt-3 pb-2">Síguenos</h3>
        <a href="#">
          <img src="{{ asset('images/facebook.png') }}" alt="" style="height:32px">
        </a>
        <a href="#">
          <img src="{{ asset('images/instagram.png') }}" alt="" style="height:32px">
        </a>
        <a href="#">
          <img src="{{ asset('images/twitter.png') }}" alt="" style="height:32px">
        </a>
        <a href="#">
          <img src="{{ asset('images/youtube.png') }}" alt="" style="height:32px">
        </a>
        <a href="#">
          <img src="{{ asset('images/whatsapp.png') }}" alt="" style="height:32px">
        </a>
        <a href="#">
          <img src="{{ asset('images/correo.png') }}" alt="" style="height:32px">
        </a>
      </div>      

    </div>
    <div class="row justify-content-md-center div-copyright">
      <div>
        <p>Copyright Lofinn 2019. Todos los derechos reservados.</p>
      </div>      
    </div>    
  </div>

</footer>