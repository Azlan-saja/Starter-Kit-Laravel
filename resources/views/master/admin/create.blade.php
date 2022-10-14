@push('customCss')
<link rel="stylesheet" href="{{ asset('assets/system/css/choices.css') }}">
@endpush

@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-first">
                <h3>Create Admin</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-last">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">List Admin</li>
                        <li class="breadcrumb-item active" aria-current="page">Create Admin</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
    <section class="section">
        <div class="card">
            <div class="card-body">
                <form class="form" action="#" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-12 d-flex justify-content-end">
                            <a href="{{ route('admin.index') }}" class="btn btn-outline-secondary icon icon-left me-1 mb-1"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
                            <button type="submit" class="btn btn-primary icon icon-left me-1 mb-1"><i class="fas fa-plus-circle"></i> Create</button>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" id="fullName" class="form-control @error('fullName') is-invalid @enderror"
                                    value="{{ old('fullName') }}"
                                    placeholder="Full Name..." name="fullName" autofocus>

                                    @error('fullName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" class="form-control @error('username') is-invalid @enderror"
                                    value="{{ old('username') }}"
                                    placeholder="Username..." name="username">

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email..."
                                    value="{{ old('email') }}"
                                    name="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="telegramid">Telegram ID</label>
                                <input type="text" id="telegramid" class="form-control @error('telegramid') is-invalid @enderror"
                                    value="{{ old('telegramid') }}"
                                    name="telegramid" placeholder="Telegram ID...">

                                    @error('telegramid')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="Numberphone">Numberphone</label>
                                <input type="text" id="Numberphone" class="form-control @error('Numberphone') is-invalid @enderror"
                                    value="{{ old('Numberphone') }}"
                                    name="Numberphone" placeholder="Numberphone...">

                                    @error('Numberphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="role">Role</label>
                                    <select class="form-select" id="choices" name="role">
                                        <option value="" selected>Choose Role...</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ ucwords($role->name) }} - {{ ucwords($role->guard_name) }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>

                    </div>
                    
                </form>
            </div>
        </div>
    </section>
</div>
@stop
@push('customJs')
<script src="{{ asset('assets/system/js/choices.js') }}"></script>
<script>
    let choices = document.querySelectorAll('#choices')
    let initChoice
    for (let i = 0; i < choices.length; i++) {
        initChoice = new Choices(choices[i])
    }
</script>
@endpush
