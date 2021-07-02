@extends('admin.layouts.body')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Flat</h1>
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
                            <form method="post" action="{{ route('clients.update',$client->id) }}">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="{{$client->name}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="surname" value="{{$client->surname}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone_number" value="{{$client->phone_number}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" value="{{$client->address}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Status</label>
                                        <select name="status" class="form-control" id="exampleFormControlSelect2">
                                            <option value="0" {{$client->status ? '' : 'selected'}}>Sold</option>
                                            <option value="1" {{$client->status ? 'selected' : ''}}>On Sale</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Select Flat Id</label>
                                        <select class="form-control" name="flat_id">
                                            <option value="">Select Flat Id</option>
                                            @foreach ($flats as $key => $flat)
                                            <option value="{{$flat->id}}" {{$client->flat_id == $flat->id ? ' selected' : null}}>{{$flat->id}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-info"><i class="fas fa-plus"></i>
                                            Update</button>
                                        <a href="{{ route('clients.index') }}" class="btn btn-default"><i
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
