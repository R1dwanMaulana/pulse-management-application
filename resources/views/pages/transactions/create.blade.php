@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Input Transaksi</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="uuid" class="form-control-label">No Transfer</label>
                <input type="text"
                        name="uuid"
                        value="{{ old('uuid') }}" 
                        class="form-control @error('uuid') is-invalid @enderror"/>
                @error('uuid') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
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
                <label for="transaction_total" class="form-control-label">Total Transaksi</label>
                <input type="number"
                        name="transaction_total"
                        value="{{ old('transaction_total') }}" 
                        class="form-control @error('transaction_total') is-invalid @enderror"/>
                @error('transaction_total') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="transaction_status" class="form-control-label">Status Transaksi</label>
                <select type="text"
                        name="transaction_status"
                        class="form-control @error('transaction_status') is-invalid @enderror">
                        <option>PENDING</option>
                        <option>SUCCESS</option>
                        <option>FAILED</option>
                </select>
                @error('transaction_status') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-info" type="submit">
                    submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection