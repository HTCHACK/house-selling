@extends('admin.layouts.body')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Buildings</h1>
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
                                <h3 class="card-title"><a href="{{ route('buildings.create') }}" class="btn btn-info">Add
                                        <i class="fas fa-plus"></i></a></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Picture</th>
                                            <th colspan="2">Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($buildings as $key => $building)
                                            <tr>

                                                <td>{{ ++$key }}</td>
                                                <td>{{ $building->name }}</td>
                                                <td><img src="{{ asset('storage/' . $building->img) }}" alt="image"
                                                        width="100px" height="100px"></td>
                                                <td class="text-right">
                                                    <a href="{{ route('buildings.edit', $building->id) }}"
                                                        class="btn btn-outline-info btn-rounded"><i
                                                            class="fas fa-pen"></i></a>
                                                </td>
                                                <td><form action="{{ route('buildings.destroy', $building->id) }}"
                                                    class="inline-flex" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button
                                                        onclick="return confirm('Are you sure you want to delete ?');"
                                                        class="btn btn-outline-danger btn-rounded" type="submit">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form></td>

                                            </tr>
                                        @endforeach
                                        {{ $buildings->links() }}
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
