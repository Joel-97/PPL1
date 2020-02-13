<!-- GESTION ESTUDIANTES DISEÑO Y FUNCIONALIDAD -->
<!-- MODULO GESTION ESTUDIANTES -->

@extends('layouts.app', ['activePage' => 'gestion-estudiantes', 'titlePage' => __('Gestión de estudiantes')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Gestión de estudiantes</h4>
            <p class="card-category"> Informacion de los estudiantes activos registrados en el sistema</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Cedula
                  </th>
                  <th>
                    Nombre
                  </th>
                  <th>
                    Ciudad
                  </th>
                  <th>
                    Telefono
                  </th>
                  <th>
                    Curriculum
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Johnson
                    </td>
                    <td>
                      Marbella
                    </td>
                    <td>
                      +506 8854-5023
                    </td>
                    <td class="text-primary">
                      <a href="#">Ver curriculum</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Minerva Chavarría
                    </td>
                    <td>
                      Santa Cruz
                    </td>
                    <td>
                      +506 6125-0546
                    </td>
                    <td class="text-primary">
                      <a href="#">Ver curriculum</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sergio Rodríguez
                    </td>
                    <td>
                      Playas del Coco
                    </td>
                    <td>
                      +506 7105-6555
                    </td>
                    <td class="text-primary">
                      <a href="#">Ver curriculum</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Sasha Martínez
                    </td>
                    <td>
                      Liberia
                    </td>
                    <td>
                      +506 8805-6498
                    </td>
                    <td class="text-primary">
                      <a href="#">Ver curriculum</a>
                    </td>
                  </tr>
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