<table class="table table bordered">
    <tr>
        <th>Nama</th>
        <td>{{ $item->name }}</td>
    </tr>
    <tr>
        <th>Nomor HP</th>
        <td>{{ $item->number }}</td>
    </tr>
    <tr>
        <th>Total Transaksi</th>
        <td>Rp. {{number_format ($item->transaction_total,0,'','.') }}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>{{ $item->transaction_status }}</td>
    </tr>
    <tr>
        <th>Pembelian Pulsa</th>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <th>Nama</th>
                    <th>Nomor HP</th>
                    <th>Nominal Pulsa</th>
                </tr>
                @foreach ($item->details as $detail)
                    <tr>
                        <td>{{ $detail->buyer->name }}</td>
                        <td>{{ $detail->buyer->number }}</td>
                        <td>Rp. {{ number_format($detail->buyer->price,0,'','.') }}</td>
                    </tr>
                @endforeach
            </table>
        </td>
    </tr>
    <tr>
        <th>Result</th>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <th>Transaksi Total</th>
                    <th>Nominal Pulsa</th>
                    <th>Kembalian</th>
                </tr>
                @foreach ($item->details as $detail)
                @php
                    $hasil =  ($item->transaction_total) -  $detail->buyer->price;
                @endphp
                    <tr>
                        <td>Rp. {{ number_format($item->transaction_total,0,'','.') }}</td>
                        <td>Rp. {{ number_format($detail->buyer->price,0,'','.') }}</td>
                        {{-- cara biar cepet tanpa config provider {{ number_format($hasil,0,'','.') }} --}}
                        <th> @currency($hasil)</th>  
                    </tr>
                @endforeach
            </table>
        </td>
    </tr>
</table>    
<div class="row">
    <div class="col-4">
        <a href="{{ route('transactions.status', $item->id) }}?status=SUCCESS" class="btn btn-success btn-block"><i class="fa fa-check"></i>Set Sukses</a>
    </div>
    <div class="col-4">
        <a href="{{ route('transactions.status', $item->id) }}?status=FAILED" class="btn btn-danger btn-block"><i class="fa fa-times"></i>Set gagal</a>
    </div>
    <div class="col-4">
        <a href="{{ route('transactions.status', $item->id) }}?status=PENDING" class="btn btn-info btn-block"><i class="fa fa-spinner"></i>Set Pending</a>
    </div>
</div>