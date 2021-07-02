@extends('admin.layouts.body')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Building</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul style="list-style:none;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <!-- /.col -->
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">

                            <!-- /.card-header -->
                            <form method="post" action="{{ route('buildings.update', $building->id) }}">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="{{ $building->name }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address"
                                            value="{{ $building->address }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="map" value="{{ $building->map }}">
                                    </div>
                                    <div class="form-group">
                                        <img src="{{ asset('storage/' . $building->img) }}" alt="image" width="100px"
                                            height="100px">
                                        <input id="exampleFormControlFile1" type="file" name="img" class="form-control-file"
                                            title="exampleFormControlFile1">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i>
                                            Update</button>
                                        <a href="{{ route('buildings.index') }}" class="btn btn-default"><i
                                                class="fas fa-times"></i>
                                            Cancel</a>
                                    </div>
                                </div>
                            </form>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>

@endsection
