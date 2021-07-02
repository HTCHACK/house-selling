@extends('admin.layouts.body')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Clients</h1>
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
                                <h3 class="card-title"><button type="button" class="btn btn" style="background-color:#1ed60e;margin-lft:0.2rem">On Sale</button>
                                    <button type="button" class="btn btn" style="background-color:rgb(192, 189, 7)" class="">Sold</button></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Flat ID</th>
                                            <th>Flat Number</th>
                                            <th>Status</th>
                                            <th colspan="2">Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $key => $client)
                                        <tr
                                        @if($client->status == 0)
                                        style="background-color:rgb(192, 189, 7);"
                                        @else
                                        style="background-color:#1ed60e"
                                        @endif
                                        >

                                                <td>{{ ++$key }}</td>
                                                <td>{{ $client->name }}</td>
                                                <td>{{ $client->surname }}</td>
                                                <td>{{ $client->phone_number }}</td>
                                                <td>{{ $client->address }}</td>
                                                <td>{{ $client->flat_id }}</td>
                                                <td>{{ $client->flat->number}}
                                                <td>{{ $client->status}}</td>
                                                <td class="text-right">
                                                    <a href="{{route('clients.edit',$client->id)}}"
                                                        class="btn btn-outline-info btn-rounded"><i
                                                            class="fas fa-pen"></i></a>
                                                </td>
                                                <td><form
                                                    class="inline-flex" method="POST" action="{{route('clients.destroy',$client->id)}}">
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
