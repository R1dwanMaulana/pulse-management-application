@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Pembeli</strong>
            <small>{{ $item->name }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('buyers.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Pembeli</label>
                    <input type="text"
                            name="name"
                            value="{{ old('name') ? old('name') : $item->name }}" 
                            class="form-control @error('name') is-invalid @enderror"/>
                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="number" class="form-control-label">Nomor HP</label>
                    <input type="text"
                            name="number"
                            value="{{ old('number') ? old('number') : $item->number }}" 
                            class="form-control @error('number') is-invalid @enderror"/>
                    @error('number') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                    <label for="price" class="form-control-label">Jumlah Pulsa</label>
                    <input type="number"
                            name="price"
                            value="{{ old('price') ? old('price') : $item->price }}" 
                            class="form-control @error('price') is-invalid @enderror"/>
                    @error('price') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-info" type="submit">
                        Ubah Pembelian
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection