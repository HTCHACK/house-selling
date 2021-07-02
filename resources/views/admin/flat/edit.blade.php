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
                            <form method="post" action="{{ route('flats.update',$flat->id) }}">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="number" value="{{$flat->number}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="count_rooms" value="{{$flat->count_rooms}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="prize" value="{{$flat->prize}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Status</label>
                                        <select name="status" class="form-control" id="exampleFormControlSelect2">
                                            <option value="0" {{$flat->status ? '' : 'selected'}}>Sold</option>
                                            <option value="1" {{$flat->status ? 'selected' : ''}}>On Sale</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="etaj_id">
                                            <option value="">Select Flour</option>
                                            @foreach ($etajs as $key => $etaj)
                                            <option value="{{$etaj->id}}" {{$flat->etaj_id == $etaj->id ? ' selected' : null}}>{{$etaj->number}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-info"><i class="fas fa-plus"></i>
                                            Update</button>
                                        <a href="{{ route('flats.index') }}" class="btn btn-default"><i
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
