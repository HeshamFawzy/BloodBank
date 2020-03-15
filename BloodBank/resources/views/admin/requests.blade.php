@extends('admin.home')

@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>User Request Name</th>
                        <th>Blood Group</th>
                        <th>email</th>
                        <th>Contact_No.</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    @if($data ?? '')
                    @foreach($data as $row)
                    <tr>
                        <th>{{$row->firstname}}</th>
                        <td>{{$row->bloodgroup}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->contactno}}</td>
                        <td>{{$row->city}}</td>
                        <td>{{$row->address}}</td>
                        <td>{{$row->created_at}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection