@extends('admin.layouts.body')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Block</h1>
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
                            <form method="post" action="{{ route('blocks.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="number" placeholder="Block number..">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="building_id">
                                            <option value="">Select Building</option>
                                            @foreach ($buildings as $key => $building)
                                            <option value="{{$building->id}}">{{$building->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-info"><i class="fas fa-plus"></i>
                                            Add</button>
                                        <a href="{{ route('blocks.index') }}" class="btn btn-default"><i
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
