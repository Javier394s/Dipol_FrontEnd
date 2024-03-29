@extends('layouts.admin')
@section('title', 'Home')

@section('content')
<section class="admin d-flex flex-column" style="margin-top: -20px" >
<div class="container">
    <div class="row justify-content-center" style="margin-top: 50px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADMIN PANEL') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡BIENVENIDO A SU PANEL DE ADMINSTRACIÓN!') }}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

