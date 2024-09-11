@extends("layouts.FrontendLayout")

@section("title", "- Todos")

@section("content")
    <div class="col-lg-8 mx-auto mt-5">
        <div class="table-resposive">
            <table class="table border">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Detail</th>
                        <th>User</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $key=>$todo)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$todo->title}}</td>
                            <td>{{$todo->detail}}</td>
                            <td>{{$todo->user}}</td>
                            <td>{{$todo->is_completed ? "Completed" : "Pending"}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-sm bg-warning text-white" href="">Edit</a>
                                    <a class="btn btn-sm bg-danger text-white" href="">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@endsection