@extends('admin.layouts.index')
@section('content')
<script src="{{asset('js/chart.js')}}"></script>
<script type="text/javascript" src="{{asset('assets_admin/js/statistiacl.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('assets_admin/AdminLTE.css')}}">
<div id="page-wrapper">
  <div class="container-fluid" >
   <div class="row" style="margin-top: 20px;">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h5>{{$quantity_invoice}}</h5>

              <p>Invoice</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('list.invoice')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h5>{{$product}}</h5>

              <p>Product</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('list.product')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h5><?php echo number_format($money_day)." đ"; ?></h5>

              <p>Money on day</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h5><?php echo number_format($sum_money)." đ"; ?></h5>

              <p>Money</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- endrow -->
    	<div class="col-lg-3" style="margin-top: 10px">
    		<label>Năm</label>
       		<select class="form-control" name="year" id="year">
				@foreach($year as $ye)
       				<option value="{{$ye->year}}">{{$ye->year}}</option>
       			@endforeach
            </select>
    	</div>
    	<canvas id="lineChart" style="margin-top:20px;margin-bottom:20px;"></canvas>
    	
		  <canvas id="doughnutChart" style="margin-top:40px;height: 150px; width: 400px;margin-bottom: 50px;"></canvas>
    </div>
</div>
@endsection