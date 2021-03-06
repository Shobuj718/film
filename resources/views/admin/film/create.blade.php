@extends('admin.master')

@section('page-title', 'Film Add ')

@section('content-heading', 'Add Film Information')



@section('main-content')

	<div class="panel-body">
        <div class="row">
            <div class="col-lg-6">

            @if(Session::has('error'))
                        @include('admin.includes.errors')
                    @endif
                    @if(Session::has('success'))
                        @include('admin.includes.success')
                    @endif
            	
               <form  method="post"  action="{{url('/films/store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label>Film Name</label>
                        <input type="text" class="form-control" name="name">
                        @if($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                        <label> Description</label>
                        <textarea cols="3" rows="3" class="form-control" name="description"></textarea>
                         @if($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('realeseDate') ? 'has-error' : '' }}">
                        <label> Realese Data</label>
                        <input type="date" class="form-control" name="realeseDate" placeholder="Enter release date">
                         @if($errors->has('realeseDate'))
                            <span class="help-block">
                                <strong>{{ $errors->first('realeseDate') }}</strong>
                            </span>
                        @endif
                    </div>
                     <div class="form-group {{ $errors->has('rating') ? 'has-error' : '' }}">
                        <label> Rating </label>
                        <input type="text" class="form-control" name="rating" placeholder="Enter rating">
                         @if($errors->has('rating'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rating') }}</strong>
                            </span>
                        @endif
                    </div>
                     <div class="form-group {{ $errors->has('ticketPrice') ? 'has-error' : '' }}">
                        <label> Ticket Price</label>
                        <input type="text" class="form-control" name="ticketPrice" placeholder="Enter ticket price">
                         @if($errors->has('ticketPrice'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ticketPrice') }}</strong>
                            </span>
                        @endif
                    </div>
                     <div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
                        <label> Country</label>
                        <input type="text" class="form-control" name="country" placeholder="Enter Country ">
                         @if($errors->has('country'))
                            <span class="help-block">
                                <strong>{{ $errors->first('country') }}</strong>
                            </span>
                        @endif
                    </div>
                     <div class="form-group {{ $errors->has('genre') ? 'has-error' : '' }}">
                        <label> Genre</label>
                        <input type="text" class="form-control" name="genre" placeholder="Enter Genre">
                         @if($errors->has('genre'))
                            <span class="help-block">
                                <strong>{{ $errors->first('genre') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                        <label> Photo</label>

                        <input type="file" class="form-control" name="image" >
                        @if($errors->has('image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                    	<input type="submit" value="Submit" class="btn btn-block btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection