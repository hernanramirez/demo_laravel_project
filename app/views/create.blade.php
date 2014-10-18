@extends('layout')

@section('content')
 
        <div class="row"> 
            <h1 class="subheader">Crear un post con laravel 4</h1>
            <!--si el formulario contiene errores de validación-->
            @if($errors->has())
                <div class="alert alert-danger alert-dismissible" role="alert">
                
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              
                    <!--recorremos los errores en un loop y los mostramos-->
                    @foreach ($errors->all('<p>:message</p>') as $message)
                        {{ $message }}
                    @endforeach
                     
                </div>
            @endif

                {{ Form::open(array('url' => 'crud/create')) }}
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                           {{ Form::label('title', 'Title') }}
                           {{ Form::text('title', null, ['class' => 'form-control']) }}
                           {{ $errors->first('title', '<p class="help-block">:message</p>') }}
                    </div>
            
                    <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">  
                        {{ Form::label('content', 'Post') }}
                        {{ Form::textarea('content', Input::old('content'), array('class'=>'form-control')) }}
                        {{ $errors->first('content', '<p class="help-block">:message</p>') }}
                    </div>

                    {{ Form::submit('Crear post', array('class'=>'btn btn-primary', 'role'=>'button')) }}
            
                {{ Form::close() }}
 
            </table>    
             
        </div>
@stop