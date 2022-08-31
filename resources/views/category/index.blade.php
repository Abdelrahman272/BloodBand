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
                        <h1>Category</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category List</h3>
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

                    @if(session()->has('delete'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{\session()->get('delete')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <a href="{{route('category.create')}}" class="btn btn-success" role="button" aria-disabled="true">Add Category</a><br><br>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Buttons</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0; ?>
                        @foreach($categories as $category)
                        <?php $i++; ?>
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="{{route('category.edit', $category->id)}}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Edit</a>
                                    <form action="{{route('category.destroy', $category->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal">Delete</button>
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