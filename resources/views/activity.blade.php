

@extends('layouts.admin')
@extends('admin.header_dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/activity') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        
          <!-- ./col -->
          @if(Auth::id()==1)
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><sup style="font-size: 20px"></sup></h3>

                <p>All Church Members</p>
              </div>
              <div class="icon">
              <i class="fa fa-users nav-icon"></i>
              </div>
              <a href="{{ url('ajax-members')}}" class="small-box-footer">View...<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>

                <p>Sunday Offerings</p>
              </div>
              <div class="icon">
              <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ url('ajax-sunday_offering')}}" class="small-box-footer">View...<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
            <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3>

                <p>Leaders</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ url('ajax-leaders')}}" class="small-box-footer">View...<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
           <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3></h3>

                <p>Attendance</p>
              </div>
              <div class="icon">
              <i class="fa fa-list"></i>
              </div>
              <a href="{{ url('ajax-attendance')}}" class="small-box-footer">View...<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3></h3>

                <p> Online Givings</p>
              </div>
              <div class="icon">
              <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ url('/giving') }}" class="small-box-footer">View...<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
            
          <!-- ./col -->
         <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3></h3>

                <p>Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ url('ajax-visitors')}}" class="small-box-footer">View...<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
     

		  <!--div class="col-lg-4 col-6">
            <!-- small box 
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3>

                <p>Prayer Requests</p>
              </div>
              <div class="icon">
              <i class="fa fa-product-hunt"></i>
              </div>
              <a href="{{ url('/Prayers') }}" class="small-box-footer">View...<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div-->

           @endif
           @if(Auth::id()==2)
           
           <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3></h3>

                <p><b> Church Members</b></p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ url('/Baptism') }}" class="small-box-footer">View...<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>

                <p>Bible Study Groups</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ url('/Groups') }}" class="small-box-footer">View...<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
         
          @endif
          
          <!--div class="col-lg-4 col-6">
            < small box >
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>
                

                <p>HBC Membership</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ url('/Groups') }}" class="small-box-footer">View...<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div-->
		  
		  </div>
     
      <div class="row">
  <div class="panel-body col-lg-6">
                    {!! $chart->html() !!}
                </div>
           
<div class="panel-body col-lg-6">
                {!!$pie->html() !!}
            </div>
            
  <div class="panel-body col-lg-6">
                {!!$area->html() !!}
            </div>
  <div class="panel-body col-lg-6">
                {!!$percent->html() !!}
            </div>
        </div>
    </div>
</div>
{!! Charts::scripts() !!}
{!! $chart->script() !!}

{!! $pie->script() !!}
{!! $area->script() !!}
{!! $percent->script() !!}

    @endsection