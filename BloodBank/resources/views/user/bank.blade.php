@extends('layouts.app')

@section('content')
<div>
    <div class="container" style="background-color: white; padding: 20px;">
        <div class="row">
            <div class="col-md-6 col-lg-9 offset-lg-0">
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Blood Group</th>
                                    <th>Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($data ?? '')
                                @foreach($data as $row)
                                <tr>
                                    <th>{{$row->bloodgroup}}</th>
                                    <td>{{$row->Stock}}</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <hr>
                        <form method="post" action="{{ url('/bank_p/{id}')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h1 class="text-center">Order Blood From the Bank</h1>
                            <div class="form-group">
                                <label for="bloodgroup" class="h4">Blood Group :</label>
                                <select id="bloodgroup" class="form-control" name="bloodgroup" required="">
                                    <option value="" disabled="disabled" selected="true">Select group</option>
                                    @if($options ?? '')
                                        @foreach($options as $option)
                                            <option value="{{$option}}">{{$option}}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
								<input style="float: right;" type="submit" class="btn btn-primary float-right"
									name="submit" value="Contact" />
							</div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <section id="vertical-menu">
                    <div class="list-group"><a class="list-group-item active" href=""><i class="fa fa-home fa-fw"></i>
                            Home</a><a class="list-group-item" href="{{ url('/donate')}}"><i
                                class="far fa-registered fa-fw"></i> Donor
                            Registration</a><a class="list-group-item" href="{{ url('/donor')}}"><i
                                class="fas fa-hands-helping fa-fw"></i>Donor Search</a>
                        <a class="list-group-item" href="{{ url('/bank')}}"><i class="fa fa-bank fa-fw"></i> Blood
                            Bank</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<script>

</script>
@endsection