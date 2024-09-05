<div>
    @include('livewire.admin.branch.modal')
    <div class="container-fluid">
        @include('layouts.alert.msg')
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">All Branches
          <a href="#" data-bs-toggle="modal" data-bs-target="#addBranchModal" class="btn btn-primary btn-sm text-white float-end" >
            Add Branch
            <i class="ti ti-arrow-right"></i>
          </a>
        </h5>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">S/N</th>
                <th scope="col">Branch Code</th>
                <th scope="col">Street/Building/Brgy</th>
                <th scope="col">City/State/Zip</th>
                <th scope="col">Country</th>
                <th scope="col">Contact</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($branches as $branch)

                <tr>
                    <td scope="col">{{ $loop->iteration }}</td>
                    <td scope="col">{{$branch->branch_code }}</td>
                    <td scope="col">{{ $branch->street }}</td>
                    <td scope="col">{{ $branch->city.' '.','.' '.$branch->state.' '.','.' '.$branch->zip_code }}</td>
                    <td scope="col">{{ $branch->country }}</td>
                    <td scope="col">{{ $branch->contact }}</td>
                    <td scope="col">
                        <a wire:click="editBranch({{ $branch->id }})" data-bs-toggle="modal" data-bs-target="#editBranchModal" class="btn btn-success btn-sm"><i class="ti ti-edit"></i></a>
                        <a href="#" wire:click="deleteBranch({{ $branch->id }})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger btn-sm"><i class="ti ti-trash"></i></a>
                    </td>
                </tr>
                    
                @empty

                <tr>
                    <td colspan="5">No Branch Details Found</td>
                </tr>
                    
                @endforelse
              
            </tbody>
          </table>
          <div>
            {{ $branches->links() }}
        </div>

        </div>
    </div>
    </div>
</div>

@push('script')

<script>
    window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide');
        $('#addBranchModal').modal('hide');
        $('#editBranchModal').modal('hide');
    });
</script>
    
@endpush

</div>
