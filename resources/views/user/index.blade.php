@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('users.create')}}"> Tambah Data</a>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>ANJAY {{ $message }}</p>
            </div>
            @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>Action</th>
        </tr>
        @php
        $number = 1;
        @endphp
		<!--di foreach dari $users['data'] karna biasanya response dari API itu di bungkus dalam index 'data'-->
    @forelse($users['data'] as $user)
    <tr>
        <td>{{ $number++ }}</td>
        <td>{{ $user['firstName'] }}</td>
        <td>{{ $user['lastName'] }}</td>
        <td>
            <a href="{{ route('users.show',$user['id'])}}" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i></a>
        <form action="{{ route('users.destroy',$user['id'])}}" method="POST">
        @csrf
        @method('DELETE')
            <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i></button>
        </form>
        </td>

    </tr>
    @empty
        <tr><td colspan="6" align="center">No Record(s) Found!</td></tr>
    @endforelse
    </table>
    
@endsection