@extends('layout.app')
@section('title')
    city
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Cites</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <div class="card-header">
                <a href="{{route('cities.create')}}" class="btn btn-primary btn-md" role="button" aria-disabled="true">Add Cities</a>
            </div>
            @include('flash::message')
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"rowspan="1" colspan="1" aria-sort="ascending"aria-label="Rendering engine: activate to sort column descending">
                                            Number
                                        </th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"rowspan="1" colspan="1" aria-sort="ascending"aria-label="Rendering engine: activate to sort column descending">
                                            #ID
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"colspan="1" aria-label="Browser: activate to sort column ascending">
                                            City
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Governorate
                                        </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($models as $model)
                                    <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$model->id}}</td>
                                    <td>{{$model->name}}</td>
                                    <td>{{$model->governorate->name}}</td> 
                                    <td>
                                        <a href="{{route('cities.edit', $model->id)}}" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Edit</a>
                                        <form class="btn" action="{{route('cities.destroy', $model->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-md" data-toggle="modal">Delete</button>
                                        </form>
                                    </td> 
                                    </tr>
                                    @endforeach
                                </tbody> 
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
