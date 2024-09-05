@extends('layouts.admin-dash')

@section('title', 'Admin Dashboard')

@section('content')

<div>
    {{-- @include('livewire.admin.branch.modal') --}}
    <div class="container-fluid">
        @include('layouts.alert.msg')
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">All Parcels
          <a href="{{ url('/admin/parcel/create') }}" class="btn btn-primary btn-sm text-white float-end" >
            Add Parcel
            <i class="ti ti-arrow-right"></i>
          </a>
        </h5>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">S/N</th>
                <th scope="col">Tracking ID</th>
                <th scope="col">Sender Name</th>
                <th scope="col">Recipient Name</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($parcels as $parcel)

                <tr>
                    <td scope="col">{{ $loop->iteration }}</td>
                    <td scope="col">{{$parcel->tracking_id }}</td>
                    <td scope="col">{{$parcel->sender_name }}</td>
                    <td scope="col">{{ $parcel->reci_name }}</td>
                    <td scope="col">{{ $parcel->status }}</td>
                    <td scope="col">{{ $parcel->created_at }}</td>
                    <td scope="col">
                        <a href="{{ url('admin/parcel/'.$parcel->id.'/edit') }}" title="Edit Parcel Information" class="btn btn-primary btn-sm"><i class="ti ti-edit"></i></a>
                        <a href="{{ url('admin/parcel/'.$parcel->id.'/status') }}" title="Change Status" class="btn btn-warning btn-sm"><i class="ti ti-pencil"></i></a>
                        <a href="{{ url('admin/parcel/'.$parcel->id.'/view-receipt') }}" title="View Parcel Receipt" class="btn btn-success btn-sm"><i class="ti ti-eye"></i></a>
                        <a href="{{ url('admin/parcel/'.$parcel->id.'/delete') }}" title="Delete Parcel" onclick="return confirm('Are you sure you want to delete this data?')" class="btn btn-danger btn-sm"><i class="ti ti-trash"></i></a>
                    </td>
                </tr>
                
                @empty

                <tr>
                    <td colspan="5">No Parcel Details Found</td>
                </tr>
                    
                @endforelse
              
            </tbody>
          </table>
          <div>
            {{ $parcels->links() }}
        </div>

        </div>
    </div>
    </div>
</div>

@endsection