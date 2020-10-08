@extends('layouts.default')

@section('content')

     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $income }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comment-dollar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sale</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $sales }}%</div>
                  </div>
                  <div class="col">
                    <div class="progress progress-sm mr-2">
                      <div class="progress-bar bg-info" role="progressbar" style="width: {{ $sales }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Success Request</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $success }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-check fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pending }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-spinner fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Row -->

    <div class="row">
      <div class="col-xl-12 mb-4">
      <div class="card-body-- shadow h-100 border-left-info">
        <div class="table-stats order-table ov-h">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Nomor HP</th>
                        <th>Total Transaksi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->number }}</td>
                        <td>Rp. {{number_format ($item->transaction_total,0,'','.') }}</td>
                        <td>
                            @if($item->transaction_status == 'PENDING')
                                <span class="badge badge-warning">
                            @elseif($item->transaction_status == 'SUCCESS')
                                <span class="badge badge-success">
                            @elseif($item->transaction_status == 'FAILED')
                                <span class="badge badge-danger">
                            @else
                                <span>
                            @endif
                                {{ $item->transaction_status }}
                            </span>
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
<!-- End of Main Content -->

    
@endsection