<!-- AQUI ES LA GESTION DE USUARIOS -->
<!-- MODULO "GESTION DE USUARIOS" -->

@extends('layouts.app', ['activePage' => 'gestion-empresas', 'titlePage' => __('Gestión de empresas')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">{{ __('Empresas') }}</h4>
            <p class="card-category"> {{ __('Aqui puede administrar las empresas') }}</p>
          </div>
          <div class="card-body">
            @if (session('status'))
            <div class="row">
              <div class="col-sm-12">
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                  </button>
                  <span>{{ session('status') }}</span>
                </div>
              </div>
            </div>
            @endif
            <div class="row">
              <div class="col-12 text-right">
                <a href="{{ route('company.create') }}" class="btn btn-sm btn-primary">{{ __('Agregar empresa') }}</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary" style="text-align:center">
                  <th>
                    {{ __('Cedula juridica') }}
                  </th>
                  <th>
                    {{ __('Nombre') }}
                  </th>
                  <th>
                    {{ __('Telefono') }}
                  </th>
                  <th>
                    {{ __('Email') }}
                  </th>
                  <th>
                    {{ __('Dirección') }}
                  </th>
                  <th>
                    {{ __('Perfil') }}
                  </th>
                  <th>
                    {{ __('Requerimientos') }}
                  </th>
                  <th>
                    {{ __('Información') }}
                  </th>
                  <th>
                    {{ __('Descripción') }}
                  </th>
            
                  <th class="text-right">
                    {{ __('Acciones') }}
                  </th>
                </thead>
                <tbody style="text-align:center">
                  @foreach($company as $comp)
                  <tr>
                    <td>
                      {{ $comp->companyId }}
                    </td>
                    <td>
                      {{ $comp->companyName }}
                    </td>
                    <td>
                      {{ $comp->companyPhone }}
                    </td>
                    <td>
                      {{ $comp->companyEmail }}
                    </td>
                    <td>
                      {{ $comp->companyAddress }}
                    </td>
                    <td>
                      {{ $comp->requiredProfile }}
                    </td>
                    <td>
                      {{ $comp->companyRequirements }}
                    </td>
                    <td>
                      {{ $comp->companyInfo }}
                    </td>
                    <td>
                      {{ $comp->companyDescription }}
                    </td>
                    <td class="td-actions text-right">
                      <form action="{{ route('company.destroy', $comp) }}" method="post">
                      @csrf
                        @method('delete')

                        <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('company.edit', $comp) }}" data-original-title="" title="">
                          <i class="material-icons">edit</i>
                          <div class="ripple-container"></div>
                        </a>
                        <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("¿Estás seguro de que deseas eliminar a este usuario?") }}') ? this.parentElement.submit() : ''">
                          <i class="material-icons">close</i>
                          <div class="ripple-container"></div>
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection