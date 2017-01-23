<div class="col-lg-10">
    <div class="form-group">
        <label for="zip_code" class="col-sm-2 control-label">CEP </label>
        <div class="col-sm-10">
            <div class="input-group">
            <input type="text" class="form-control"  name="location[cep]" id="zip_code" value="{{ $destine->Location->cep }}">
            
                <span class="input-group-btn">
                    <button class="btn btn-default" id="get_code"  type="button">Consulta!</button>
                  </span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="address_id" class="col-sm-2 control-label">Endereço *</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="location[address]" id="address" value="{{ $destine->Location->address }}">
        </div>

    </div>
    <div class="form-group">
        <label for="nei_id" class="col-sm-2 control-label">Bairro *</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="location[neighborhood]" id="neighborhood" value="{{ $destine->Location->neighborhood }}">
        </div>
    </div>
    <div class="form-group">
        <label for="city_id" class="col-sm-2 control-label">Cidade *</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="location[city]" id="city" value="{{ $destine->Location->city }}">
        </div>        
    </div>
    <div class="form-group">
        <label for="uf_id" class="col-sm-2 control-label">Estado *</label>
        <div class="col-sm-10">        
            <input type="text" class="form-control"  name="location[uf]" id="uf" value="{{ $destine->Location->uf }}">
        </div>
    </div>
    <div class="form-group">
        <label for="complement_id" class="col-sm-2 control-label">Complemento</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="location[complement]" id="complement" value="{{ $destine->Location->complement }}">
        </div>
    </div>

@section('scripts')
    @parent
    <script>
        $(document).ready(function() {

            $( "#get_code" ).click(function()
            {
                var btn = $(this);
                var old = 'Consulta!';
                var zip_code = $("input#zip_code").val();
                btn.html('Aguarde! Consultando..');

                $.getJSON("https://viacep.com.br/ws/"+zip_code+"/json/", function( json )
                {
                    console.log(json);
                })
                        .done(function(json)
                        {
                            $('#address').val(json.logradouro);
                            $('#neighborhood').val(json.bairro);
                            $('#city').val(json.localidade);
                            $('#uf').val(json.uf);
                            btn.html(old);

                        })
                        .fail(function()
                        {
                            $('#address').val('');
                            $('#district').val('');
                            $('#city').val('');
                            $('#state_abbr').val('');
                            $('#result').html('Cep não encontrado');
                            btn.html(':( Nova Consulta');
                        })

            });

        });
    </script>

@stop