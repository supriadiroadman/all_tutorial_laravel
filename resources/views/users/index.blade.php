@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Datatable
            <a href="{{ route('user.create') }}" class="btn btn-success float-right modal-show"
                title="Create User">Create</a>
        </div>
        <div class="card-body">
            <table class="table" id="my-table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $('#my-table').DataTable({
            responsive:true,
            processing:true,
            serverSide:true,
            ajax:"{{ route('table.user') }}",
            columns: [
                {data: 'DT_RowIndex', name:'id'},
                {data: 'name', name:'name'},
                {data: 'email', name:'email'},
                {data: 'action', name:'action'}
            ]
        });
</script>
@endpush
