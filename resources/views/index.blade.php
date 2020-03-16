@extends('layouts.app')

@section('title', 'Index')

@section('sidebar')

@parent

@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 mt-5 pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <h4></h4>
            <p class="paragrafo text-justificado text-texto-principal-2">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Nulla rhoncus mauris commodo efficitur facilisis. Sed ut diam purus. Mauris neque eros,
                sodales a placerat in, rutrum sed nulla. lorem, auctor non lectus nec, fermentum laoreet eros. Lorem
                ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus mauris commodo efficitur facilisis. Sed
                ut diam purus. Mauris neque eros, sodales a placerat in, rutrum sed nulla. lorem, auctor non lectus nec,
                fermentum laoreet eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus mauris
                commodo efficitur facilisis. Sed ut diam purus. Mauris neque eros, sodales a placerat in, rutrum sed
                nulla. lorem, auctor non lectus nec, fermentum laoreet eros. </p>
        </div>
        <div>
            <nav class="navbar navbar-light">
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                  Portal de Inteligência para consulta e acesso à rede de Dados - Taesa
                </button>
              </nav>  
        </div>
                  
    </div>
    <!-- accordion com icone -->

    <div class="col-12 col-md-12 mt-5">
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </nav>

    </div>
    <div class="col-4">
      <nav class="nav flex-column">
        <a class="nav-link active" href="#">Active</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </nav>
    </div>
    
</div>
@endsection
