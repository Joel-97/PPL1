<!-- MODULO "GESTION DE USUARIOS" -->
@extends('layouts.app', ['activePage' => 'gestion-empresas', 'titlePage' => __('Gestión de empresas')])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ url('/company') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Agregar empresa') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a href="{{ route('company.index') }}" class="btn btn-sm btn-primary">{{ __('Regresar a la lista') }}</a>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Cedula juridica') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('companyId') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('companyId') ? ' is-invalid' : '' }}" name="companyId" id="input-name" type="text" placeholder="{{ __('Cedula juridica') }}" value="{{ old('companyId') }}" required="true" aria-required="true" />
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
                                        <input class="form-control{{ $errors->has('companyName') ? ' is-invalid' : '' }}" name="companyName" id="input-name" type="text" maxlength="110" placeholder="{{ __('Nombre de la empresa') }}" value="{{ old('companyName') }}" required />
                                        @if ($errors->has('companyName'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyName') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="input-password">{{ __('Telefono de la empresa') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('companyPhone') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('companyPhone') ? ' is-invalid' : '' }}" name="companyPhone" id="input-name" type="tel" maxlength="15" placeholder="{{ __('Telefono de la empresa') }}" value="{{ old('companyPhone') }}" required />
                                        @if ($errors->has('companyPhone'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyPhone') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="input-password">{{ __('Email de la empresa') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('companyEmail') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('companyEmail') ? ' is-invalid' : '' }}" name="companyEmail" id="input-email" type="email" maxlength="254" placeholder="{{ __('Email de la empresa') }}" value="{{ old('companyEmail') }}" required />
                                        @if ($errors->has('companyEmail'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyEmail') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="input-password">{{ __('Direción de la empresa') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('companyAddress') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('companyAddress') ? ' is-invalid' : '' }}" name="companyAddress" id="input-name" type="text" maxlength="105" placeholder="{{ __('Direción de la empresa') }}" value="{{ old('companyAddress') }}" required />
                                        @if ($errors->has('companyAddress'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyAddress') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="input-password">{{ __('Perfil requerido') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('requiredProfile') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('requiredProfile') ? ' is-invalid' : '' }}" name="requiredProfile" id="input-name" type="text" maxlength="255" placeholder="{{ __('Perfil requerido') }}" value="{{ old('requiredProfile') }}" required />
                                        @if ($errors->has('requiredProfile'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('requiredProfile') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="input-password">{{ __('Requerimientos') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('companyRequirements') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('companyRequirements') ? ' is-invalid' : '' }}" name="companyRequirements" id="input-name" type="text" maxlength="255" placeholder="{{ __('Requerimientos') }}" value="{{ old('companyRequirements') }}" required />
                                        @if ($errors->has('companyRequirements'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyRequirements') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="input-password">{{ __('Información') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('companyInfo') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('companyInfo') ? ' is-invalid' : '' }}" name="companyInfo" id="input-name" type="text" maxlength="300" placeholder="{{ __('Información') }}" value="{{ old('companyInfo') }}" required />
                                        @if ($errors->has('companyInfo'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyInfo') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="input-password">{{ __('Descripción') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('companyDescription') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('companyDescription') ? ' is-invalid' : '' }}" name="companyDescription" id="input-name" type="text" placeholder="{{ __('Descripción') }}" value="{{ old('companyDescription') }}" required />
                                        @if ($errors->has('companyDescription'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('companyDescription') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Agregar empresa') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection