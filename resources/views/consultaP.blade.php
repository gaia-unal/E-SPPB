   <!-- Page Heading -->
<h1 class="h2 mb-2" style="font-weight: bold; color: royalblue">Consultas</h1>

<div class="mb-4" style="border-radius: 10px 10px; padding: 10px; background-color:royalblue; color: white;">
    <h2 class="h4 mb-2" style="font-weight: bold">Consulta Personalizada</h2>
    A continuación puede ingresar su consulta de tipo SELECT para realizar la busqueda
    directamente en la base de datos.
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <form method="GET" action="{{ route('consultaPer') }}">
        <textarea 
            id="motivo" 
            type="text" 
            class=" form-control" 
            name="consultaPer" 
            rows="6" cols="30" 
            required
            style="resize:none; color:black;"
            placeholder="SELECT someAttribute FROM someTable WHERE someCol = 'someVariable'">@if(isset($consultaPer)){{$consultaPer}}@endif</textarea>
        <br>
        <button type="submit" class="btn btn-success" >
            {{-- <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-white-400"></i> --}}
            Consultar
            </button>  
        </form>
    </div>  
</div>


@if (isset($names))
<div class="row">
    <div class="col-xl-12 col-lg-12 ">
    
        
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabla del resultado de la consulta</h6>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            @foreach ($names as $name)
                                <th>{{$name}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            @foreach ($names as $name)
                                <th>{{$name}}</th>
                            @endforeach
                        </tr>
                    </tfoot>
                    <tbody>
                            @foreach ($matResult as $fil)
                                <tr>
                                @foreach ($fil as $col)
                                    <td>{{$col}}</td>
                                @endforeach
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        
    </div>   
</div>
@else
@if(isset($errorCon))
    Error en la consulta, verifica que has escrito todo correctamente he intenta de nuevo.
@endif
@endif


