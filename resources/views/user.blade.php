@extends('main')
@section('content')
<div class="row">
    <div class="col ">

@if (session('status'))
        <div class="alert alert-success">{{session('status')}}
            <button class="close" data-dismiss="alert" aria-hidden="true">x</button></div>

@endif




       






    <h4> User list</h4>
  <div class="card">
    <div class="card-body">
        <table class="table table-strip">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>

                    <th>Time</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($user as $u)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>

                    <td>{{$u->created_at->format('d/m/Y')}}</td>
                </tr>
                @empty

                @endforelse

            </tbody>
        </table>
    </div>
  </div>
</div>
</div>
@endsection
