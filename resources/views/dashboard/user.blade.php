@extends('layouts.app')

@section('content')
    burası dashboard content.
    <table class="table table-bordered table-striped" id="data-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>E-mail</th>
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
                ]
            });

        });
    </script>
@endsection
