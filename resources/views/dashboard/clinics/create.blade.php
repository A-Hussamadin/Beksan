@extends('shared.layout')


@section('content')
<div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Clinic</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                 <form class="form-horizontal"  method="post">
        @foreach ($errors->all() as $error)
          <p class="alert alert-danger">{{ $error }}</p>
        @endforeach

        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      <div class="alert alert-success">
        {{ Auth::id()}}
      </div>
        {!! csrf_field() !!}

        <fieldset>
          <legend>Add Clinic</legend>
          <div class="form-group">
            <label for="name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="name" placeholder="Name" name="name">
            </div>
          </div>
          <div class="form-group">
            <label for="phone" class="col-lg-2 control-label">phone</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="phone" placeholder="05xxxxxx">
            </div>
          </div>
          <div class="form-group">
            <label for="address" class="col-lg-2 control-label">Address</label>
            <div class="col-lg-10">
              <textarea class="form-control" name="address" placeholder="Address"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </fieldset>
      </form>

                 
                  </div>
                </div>
              </div>
</div>
              
     
@endsection


