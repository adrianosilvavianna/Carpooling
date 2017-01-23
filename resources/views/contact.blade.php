@extends('layouts.face_page')

@section('getout')
    <section id="main-content">
      <div class="container">
        <div class="col-md-12">
          <div class="contact-area">                   
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.397476919402!2d-49.32245828546551!3d-25.424971683790705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce6da131d6d1b%3A0x9b7d03b3efdf4053!2sUniversidade+Tuiuti+do+Paran%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1478908082610" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form">
                  <h3>Contato</h3>  
                  <p>Ficou interessado? Entre em contato conosco.</p>
                  <form action="">
                    <div class="form-group">                      
                      <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="form-group">                      
                      <input type="email" class="form-control" placeholder="E-mail">
                    </div>                     
                    <div class="form-group">
                      <textarea class="form-control" rows="3" placeholder="Mensagem"></textarea>
                    </div>
                    <div class="form-group">
                      <input class="send-btn" type="submit" value="Enviar">
                    </div>                  
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
