@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Tambah Pembeli</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('buyers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Nama Pembeli</label>
                <input type="text"
                        name="name"
                        value="{{ old('name') }}" 
                        class="form-control @error('name') is-invalid @enderror"/>
                @error('name') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="number" class="form-control-label">Nomor HP</label>
                <input type="text"
                        name="number"
                        value="{{ old('number') }}" 
                        class="form-control @error('number') is-invalid @enderror"/>
                @error('number') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="price" class="form-control-label">Jumlah Pulsa</label>
                <input type="number"
                        name="price"
                        value="{{ old('price') }}" 
                        class="form-control @error('price') is-invalid @enderror"/>
                @error('price') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-info" type="submit">
                    Tambah Pembeli
                </button>
            </div>
        </form>
    </div>
</div>
@endsection