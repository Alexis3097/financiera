@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <h3 class="mb-0">Clientes</h3>
                    </div>
                     <div>
                        <a href="{{ route('Cliente.create') }}" class="btn btn-primary">
                            {{ __('New Client')}}
                        </a>
                </div>
            </div>
            </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __('Name')}}</th>
                                <th scope="col">{{ __('Phone')}}</th>
                                <th scope="col">{{ __('Address')}}</th>
                                <th scope="col" style="width: 150px">{{ __('Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- Clientes es l nombre que puse en el controlador para indicar como lo enviare -->
                            @foreach($Clientes as $Cliente)
                                <tr>
                                    <td scope="row">{{$Cliente->IdCliente}}</td>
                                    <td>{{$Cliente->nombre}}</td>
                                    <td>{{$Cliente->telefono}}</td>
                                    <td>{{$Cliente->direccion}}</td>
                                    <td>
                                        <a href="" class="btn btn-outline-secondary btn-sm">
                                            show
                                        </a>
                                        <button class="btn btn-outline-danger btn-sm btn-delete" data-id="{{$Cliente->IdCliente}}" >DELETE</button>
                                    </td>
                                </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>

@endsection

@section('bottom-js')
<script>
$('body').on('click', '.btn-delete', function(event) {
       const id = $(this).data('id');
        Swal.fire({
            title: '¿Estas seguro ?',
            text: 'No podras revertir la accion',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor:'#3085d6',
            cancelButtonColor:'#d33',
            confirmButtonText: 'Si, borralo!'
        })  
        .then((result) => {
            if(result.value) {
                axios.delete('{{ route('Cliente.index') }}/' + id)
                .then(result =>{
                    Swal.fire({
                        title: 'borrado',
                        text:'El cliente ha sido borrado',
                        icon :'success'
                    }).then(()=>{
                        window.location.href = '{{ route('Cliente.index')}}';
                    });
                })

                .catch(error => {
                    Swal.fire|(
                    'Ocurrio un error',
                    'El cliente no se ha podido borrar',
                    'error'
                    );
                });
                
            }
        });
   });
</script>
@endsection