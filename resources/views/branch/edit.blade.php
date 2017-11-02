@extends('admin.master')

@section('css')
  <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css')}}">
@stop

@section('content')
        <section class="content-header">
        <h1>
          Branch
          
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section>
      <section class="content">
      <!-- Main content -->
      <div class="row">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create Branch</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ route('branch.update', $branch) }}" method="post">
              {{csrf_field()}}
              {{ method_field('PATCH') }}              
              <div class="box-body">
                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="col-sm-2 control-label">Tempat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Tempat" name="name" value="{{ $branch->name }}">
                    @if($errors->has('name'))
                      <span class="help-block">
                        <p>{{ $errors->first('name') }}</p>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="ptname" class="col-sm-2 control-label">Nama PT</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="ptname" id="ptname" value="{{ $branch->ptname }}" >
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="date" class="col-sm-2 control-label">Sejak</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker" name="since" value="{{ $branch->since }}">
                    </div>
                  </div>
                <!-- /.input group -->
                </div>

                <input type="submit" class="btn btn-info pull-right" value="Save">
              </div>

            </form>
          </div>
        </div>
         <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">

              <h3 class="widget-user-username">{{ $branch->name }}</h3>
              <h4 class="widget-user-desc">{{ $branch->ptname }}</h4>
              <h4 class="widget-user-desc pull-right">{{ $branch->since}}</h4>
              
            </div>
            <h5 class="widget-user-desc"><a href="{{ url('admin/'.$branch->slug) }}">{{ url('admin/'.$branch->slug) }}</a></h5>
            <div class="box-footer">

              <div class="row">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header">{{ $branch->updated_at->diffForHumans() }}</h5>
                    <span class="description-text">Last Update</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <div class="description-block">
                    <h5 class="description-header">{{ $branch->created_at->diffForHumans() }}</h5>
                    <span class="description-text">Created At</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        


    </div>

      <!-- /.row -->
      </section>

@stop

@section('javascript')
  <script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
  <script>
  $(function () {

    //Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    });

  });
</script>

@stop