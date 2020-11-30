@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin khách hàng
    </div>
   
    <div class="table-responsive">
      <?php
        $message = Session::get('message');
        if($message){
        echo $message;
        Session::put('message',null);
        }
      ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên khách hàng</th>
            <th>Số điện thoại khách hàng</th> 
            <th>Tên người nhận</th>
            <th>Địa chỉ</th> 
            <th>Số điện thoại người nhận</th> 
 
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td>{{$order_by_id->customer_name}}</td>
            <td>{{$order_by_id->customer_phone}}</td>
            <td>{{$order_by_id->shipping_name}}</td>
            <td>{{$order_by_id->shipping_address}}</td>
            <td>{{$order_by_id->shipping_phone}}</td>
          </tr>
          
        </tbody>
      </table>
    </div>
    
  </div>
</div>
<br></br>

<br></br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Chi tết đơn hàng
    </div>
    <div class="table-responsive">
      <?php
        $message = Session::get('message');
        if($message){
        echo $message;
        Session::put('message',null);
        }
      ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th> 
            <th>Giá</th> 
            <th>Tổng tiền</th> 

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td>{{$order_by_id->product_name}}</td>
            <td>{{$order_by_id->product_sales_quantity}}</td>
            <td>{{$order_by_id->product_price}}</td>
            <td>{{$order_by_id->order_total}} VNĐ</td>
         
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection