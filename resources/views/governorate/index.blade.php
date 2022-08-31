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

                    {{-- @if(session()->has('delete'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{\session()->get('delete')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif --}}

                    <a href="{{route('governorate.create')}}" class="btn btn-success" role="button" aria-disabled="true">Add Governorate</a><br><br>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Governorate</th>
                            <th>Buttons</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0; ?>
                        @foreach($governorates as $governorate)
                        <?php $i++; ?>
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$governorate->name}}</td>
                                <td>
                                    <a href="{{route('governorate.edit', $governorate->id)}}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Edit</a>
                                    <form action="{{route('governorate.destroy', $governorate->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            {{-- @include('posts.destroy') --}}
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