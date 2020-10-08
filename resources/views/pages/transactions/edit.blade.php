@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Input Transaksi</strong>
            <small>{{ $item->uuid }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('transactions.update', $item->id) }}" method="POST">
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
                <div class="form-group">
                    <label for="transaction_total" class="form-control-label">Transaksi Total</label>
                    <input type="number"
                            name="transaction_total"
                            value="{{ old('transaction_total') ? old('transaction_total') : $item->transaction_total }}" 
                            class="form-control @error('transaction_total') is-invalid @enderror"/>
                    @error('transaction_total') <div class="text-muted">{{ $message }}</div> @enderror
                </div>                
                <div class="form-group">
                    <button class="btn btn-info" type="submit">
                        Ubah Transaksi
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection