{!! Form::open(['url'=>$url,'method' => $method]) !!}
        <div class="form-group">        
        {!! Form::text('apellidos', $usuario->apellidos, ['class'=>'form-control','placeholder'=>'Ingrese sus Apellidos']) !!}
        </div>
        <div class="form-group">        
        {!! Form::text('nombres', $usuario->nombres, ['class'=>'form-control','placeholder'=>'Ingrese sus nombres...']) !!}
        </div>
        <div class="form-group">        
        {!! Form::text('dni', $usuario->dni, ['class'=>'form-control','placeholder'=>'Ingrese su DNI...']) !!}
        </div>
        <div class="form-group">        
        {!! Form::text('telefono', $usuario->telefono, ['class'=>'form-control','placeholder'=>'Ingrese su telefono...']) !!}
        </div>        
        <div class="form-group text-right">        
        <a href="{{url('/usuarios')}}">Regresar al listado de producto</a></div>
        <input type="submit" value="Enviar" class="btn btn-success">
{!! Form::close() !!}