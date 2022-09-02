@extends('layout.app')
@section('title')
Governorates
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Governorates</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Governorates List</h3>
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

                    <a href="{{route('governorate.create')}}" class="btn btn-success" role="button" aria-disabled="true">Add Governorate</a><br><br>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Governorate</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0; ?>
                        @foreach($models as $model)
                        <?php $i++; ?>
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$model->name}}</td>
                                <td>
                                    <a href="{{route('governorate.edit', $model->id)}}" class="btn btn-primary btn-md" role="button" aria-disabled="true">Edit</a>
                                    <form class="btn" action="{{route('governorate.destroy', $model->id)}}" method="POST">
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