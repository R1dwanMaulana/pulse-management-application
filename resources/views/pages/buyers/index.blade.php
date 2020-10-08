@extends('layouts.default')

@section('content')
<div class="orders">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Daftar Pembeli</h4>
                </div>
                <div class="card-body-- shadow h-100">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Nomor HP</th>
                                    <th>Nominal pulsa</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->number }}</td>
                                    <td>Rp. {{ number_format($item->price,0,'','.') }}</td>
                                    <td>
                                        
                                        <a href="{{ route('transactions.create') }}" class="btn btn-success btn-sm">
                                            <i class="fas fa-comment-dollar"></i>
                                        </a>

                                        <a href="{{ route('buyers.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-pen-square"></i>
                                        </a>

                                        <form action="{{ route('buyers.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center p-5">
                                            Data tidak tersedia
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection