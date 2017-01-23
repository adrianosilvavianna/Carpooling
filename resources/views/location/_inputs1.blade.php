  <div class="form-group{{ $errors->has('location.cep') ? ' has-error' : '' }} ">
    {!! Form::label('cep', 'Cep*', ['class' => 'col-sm-2 control-label']) !!}

    <div class="col-sm-10">
        <div class="input-group">
            {!! Form::text ("location[cep]", null , ['class' => 'form-control', 'id'=>'cep']) !!}

              <span class="input-group-btn">
                <button class="btn btn-success" id="get_code"  type="button">Consulta!</button>
              </span>
        </div>

        @if ($errors->has('location.cep'))
            <span class="help-block"><strong>{{ $errors->first('location.cep') }}</strong></span>
        @endif
    </div>

</div>

<div id="control">
    <div class="form-group{{ $errors->has('location.address') ? ' has-error' : '' }}">
        {!! Form::label('Address', 'Endereço*', ['class' => 'col-sm-2 control-label']) !!}

        <div class="col-sm-10">
            {!! Form::text ('location[address]', null , ['class' => 'form-control', 'id'=>'address']) !!}

            @if ($errors->has('location.address'))
                <span class="help-block"><strong>{{ $errors->first('location.address') }}</strong></span>
            @endif
        </div>

    </div>

    <div class="form-group{{ $errors->has('location.city') ? ' has-error' : '' }}">
        {!! Form::label('city', 'Cidade*', ['class' => 'col-sm-2 control-label']) !!}

        <div class="col-sm-10">
            {!! Form::text ('location[city]', null , ['class' => 'form-control readonly', 'id'=>'city']) !!}

            @if ($errors->has('location.city'))
                <span class="help-block"><strong>{{ $errors->first('location.city') }}</strong></span>
            @endif
        </div>
    </div>


    <div class="form-group{{ $errors->has('location.neighborhood') ? ' has-error' : '' }}">
        {!! Form::label('neighborhood', 'Bairro*', ['class' => 'col-sm-2 control-label']) !!}

        <div class="col-sm-10">
            {!! Form::text ('location[neighborhood]', null , ['class' => 'form-control ', 'id'=>'neighborhood']) !!}

            @if ($errors->has('location.neighborhood'))
                <span class="help-block"><strong>{{ $errors->first('location.neighborhood') }}</strong></span>
            @endif
        </div>
    </div>


    <div class="form-group{{ $errors->has('location.u') ? ' has-error' : '' }}">
        {!! Form::label('uf', 'UF *', ['class' => 'col-sm-2  control-label']) !!}

        <div class="col-sm-10">
            {!! Form::text ('location[uf]', null , ['class' => 'form-control ', 'id'=>'uf']) !!}

            @if ($errors->has('location.uf'))
                <span class="help-block"><strong>{{ $errors->first('location.uf') }}</strong></span>
            @endif
        </div>
    </div>


    <div class="form-group{{ $errors->has('location.complement') ? ' has-error' : '' }}">
        {!! Form::label('complement', 'Complemento', ['class' => 'col-sm-2 control-label']) !!}

        <div class="col-sm-10">
            {!! Form::text ('location[complement]', null , ['class' => 'form-control readonly', 'id'=>'complement']) !!}

            @if ($errors->has('location.complement'))
                <span class="help-block"><strong>{{ $errors->first('location.complement') }}</strong></span>
            @endif
        </div>
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
                    var zip_code = $("input#cep").val();
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