@extends('admin.layouts.body')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blocks</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('updated'))
                    <div class="alert alert-info" role="alert">
                        {{ session('updated') }}
                    </div>
                @endif
                @if (session('deleted'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('deleted') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><a href="{{ route('blocks.create') }}" class="btn btn-info">Add
                                        <i class="fas fa-plus"></i></a></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Number</th>
                                            <th>Building Name</th>
                                            <th>Building ID</th>
                                            <th colspan="2">Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blocks as $key => $block)
                                            <tr>

                                                <td>{{ ++$key }}</td>
                                                <td>{{ $block->number }}</td>
                                                <td>{{ $block->buildingBlock->name}}</td>
                                                <td>{{ $block->building_id }}</td>
                                                <td class="text-right">
                                                    <a href="{{ route('blocks.edit', $block->id) }}"
                                                        class="btn btn-outline-info btn-rounded"><i
                                                            class="fas fa-pen"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('blocks.destroy', $block->id) }}"
                                                        class="inline-flex" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button
                                                            onclick="return confirm('Are you sure you want to delete ?');"
                                                            class="btn btn-outline-danger btn-rounded" type="submit">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>

@endsection
