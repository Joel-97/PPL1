<!-- EDITAR USUARIOS DEL LOGIN -->
<!-- MODULO "GESTION DE USUARIOS" -->

@extends('layouts.app', ['activePage' => 'gestion-empresas', 'titlePage' => __('Gestión de empresas')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="post" action="/company/{{$company->id }}" autocomplete="off" class="form-horizontal">
          @csrf
          @method('put')

          <div class="card ">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Editar empresa') }}</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12 text-right">
                  <a href="{{ route('company.index') }}" class="btn btn-sm btn-primary">{{ __('Volver a la lista') }}</a>
                </div>
              </div>
              
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Cedula juridica') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('companyId') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('companyId') ? ' is-invalid' : '' }}" name="companyId" id="input-name" type="text"  placeholder="{{ __('Cedula juridica') }}" value="{{ old('companyId', $company->companyId) }}" required="true" aria-required="true" />
                    @if ($errors->has('companyId'))
                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyId') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Nombre de la empresa') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('companyName') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('companyName') ? ' is-invalid' : '' }}" name="companyName" id="input-name" type="text" maxlength="100" placeholder="{{ __('name') }}" value="{{ old('companyName', $company->companyName) }}" required />
                    @if ($errors->has('companyName'))
                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyName') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Telefono de la empresa') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('companyPhone') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('companyPhone') ? ' is-invalid' : '' }}" name="companyPhone" id="input-name" type="text" maxlength="15" placeholder="{{ __('name') }}" value="{{ old('companyPhone', $company->companyPhone) }}" required />
                    @if ($errors->has('companyPhone'))
                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyTel') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Email de la compañia') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('companyEmail') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('companyEmail') ? ' is-invalid' : '' }}" name="companyEmail" id="input-name" type="text" maxlength="254" placeholder="{{ __('name') }}" value="{{ old('companyEmail', $company->companyEmail) }}" required />
                    @if ($errors->has('companyEmail'))
                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyEmail') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Direción de la compañia') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('companyAddress') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('companyAddress') ? ' is-invalid' : '' }}" name="companyAddress" id="input-name" type="text" maxlength="100" placeholder="{{ __('name') }}" value="{{ old('companyAddress', $company->companyAddress) }}" required />
                    @if ($errors->has('companyAddress'))
                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyAddress') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Perfil requerido') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('requiredProfile') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('requiredProfile') ? ' is-invalid' : '' }}" name="requiredProfile" id="input-name" type="text" maxlength="255" placeholder="{{ __('name') }}" value="{{ old('requiredProfile', $company->requiredProfile) }}" required />
                    @if ($errors->has('requiredProfile'))
                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('requiredProfile') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Requerimientos') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('companyRequirements') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('companyRequirements') ? ' is-invalid' : '' }}" name="companyRequirements" id="input-name" type="text" maxlength="255" placeholder="{{ __('name') }}" value="{{ old('companyRequirements', $company->companyRequirements) }}" required />
                    @if ($errors->has('companyRequirements'))
                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyRequirements') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Información') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('companyInfo') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('companyInfo') ? ' is-invalid' : '' }}" name="companyInfo" id="input-name" type="text" maxlength="300" placeholder="{{ __('name') }}" value="{{ old('companyInfo', $company->companyInfo) }}" required />
                    @if ($errors->has('companyInfo'))
                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyInfo') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Descripción') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('companyDescription') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('companyDescription') ? ' is-invalid' : '' }}" name="companyDescription" id="input-name" type="text" placeholder="{{ __('name') }}" value="{{ old('companyDescription', $company->companyDescription) }}" required />
                    @if ($errors->has('companyDescription'))
                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyDescription') }}</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">{{ __('Guardar cambios') }}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection