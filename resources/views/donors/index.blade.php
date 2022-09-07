@extends('layout.app')
@section('title')
Donors
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Donors</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    @include('flash::message')
                    <h3 class="card-title">Donors List</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <td>d_o_b</td>
                            <td>Age</td>
                            <th>city</th>
                            <th>Blood Type</th>
                            <th>Phone</th>
                            <th>address</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0; ?>
                        @foreach($models as $model)
                        <?php $i++; ?>
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$model->name}}</td>
                                <td>{{$model->email}}</td>
                                <td>{{$model->d_o_b}}</td>
                                <td>{{$model->age}}</td>
                                <td>{{$model->cites->name}}</td>
                                <td>{{$model->bloodTypes->name}}</td>
                                <td>{{$model->phone}}</td>
                                <td>{{$model->address}}</td>
                                <td>{{$model->gender}}</td>
                                <td>
                                    @if ($model->status == '1')
                                        Active
                                    @else
                                        InActive;
                                    @endif
                                </td>
                                {{-- <td>{{$model->status}}</td> --}}
                                <td>
                                    <form class="btn" action="{{route('donors.destroy', $model->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-md" data-toggle="modal">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection