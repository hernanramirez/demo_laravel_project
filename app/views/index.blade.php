@extends('layout')

@section('content')

       <!--mostramos mensajes conforme pasen acontecimientos-->
        @if(Session::has('mensaje'))

            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Mensaje del sistema:</strong> {{ Session::get('mensaje') }}
            </div>

        @endif


        <div class="row"> 
            <h1 class="subheader">Crud con laravel 4</h1>
            
            
            @if(count($posts) > 0)
                <table class="table table-striped">
                    <tr>
                        <th>Título</th>
                        <th>Post</th>
                        <th>Acción</th>    
                    </tr>
                    @foreach($posts as $post)
                        <tr>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td>
                                 {{ $post->content }}
                            </td>
                            <td>
                                {{ HTML::link(URL::to('crud/update/'.$post->id), 'Actualizar', array('class'=>'btn btn-primary', 'role'=>'button')) }}
                                {{ HTML::link(URL::to('crud/delete/'.$post->id), 'Eliminar', array('class'=>'btn btn-danger', 'role'=>'button')) }}
                            </td>
                        </tr> 
                @endforeach
                </table>
            @else

              <p class="bg-info">No hay registros</p>

            @endif  
            
            <a href="{{{ URL::to('crud/create') }}}"  class="btn btn-primary" role="button">Crear un nuevo post</a>
            
            
        </div>

@stop
