@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Input Barang') }}</div>

                <div class="card-body">
                    <form method="POST" action="/warung">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_barang" class="col-md-4 col-form-label text-md-right">{{ __('Nama Barang') }}</label>

                            <div class="col-md-6">
                                <input id="nama_barang" type="text" class="form-control{{ $errors->has('nama_barang') ? ' is-invalid' : '' }}" name="nama_barang" value="{{ old('nama_barang') }}" required autofocus>

                                @if ($errors->has('nama_barang'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nama_barang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga Barang') }}</label>

                            <div class="col-md-6">
                                <input id="harga" type="text" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}" name="harga" value="{{ old('harga') }}" required>

                                @if ($errors->has('harga'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('harga') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
