@extends('layouts.app')

@section('title', 'Akıllıphone')

@section('content')
    burası dashboard content.
    <table class="table table-bordered table-striped" id="data-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script type="text/javascript">
        $(function () {

            var table = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('user.table') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                ]
            });

        });
    </script>
@endsection

@section('scripts')
    @include('components.notifyFade')
@endsection
