@extends('welcome')
@section('content')
@foreach($product_details as $key => $value)
<div class="product-details">
	<!--product-details-->
	<div class="col-sm-5">
		<div class="view-product">
			<img src="{{URL::To('public/uploads/product/'.$value -> product_image)}}" alt="" />
		</div>
		<div id="similar-product" class="carousel slide" data-ride="carousel">
			<!-- Controls -->
			<a class="left item-control" href="#similar-product" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="right item-control" href="#similar-product" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>

	</div>
	<div class="col-sm-7">
		<div class="product-information">
			<!--/product-information-->
			<img src="images/product-details/new.jpg" class="newarrival" alt="" />
			<h2>{{$value->product_name}}</h2>
			<img src="images/product-details/rating.png" alt="" />
			<form action="{{URL::to('/save-cart')}}" method="POST">
                {{csrf_field()}}
			<span>
				<span>{{number_format($value->product_price).' VNĐ'}}</span>
				<label>Số lượng:</label>
				<input name="qty" type="number" min="1" value="1" />
				<input name="productid_hidden" type="hidden" value="{{$value->product_id}}" />
			</span>

			<button style="margin-bottom: 20px; margin-left: -1px;" type="submit" class="btn btn-fefault cart">
				<i class="fa fa-shopping-cart">  Thêm vào giỏ hàng</i>
			</button>
			</form>
			<p><b>Tình trạng:</b> Còn hàng</p>
			<p><b>Điều kiện:</b> Mới</p>
			<p><b>Loại sản phẩm: </b>{{$value->category_name}}</p>
			<p><b>Mô tả sản phẩm: </b>{{$value->product_desc}}</p>
			<a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
		</div>
		<!--/product-information-->
	</div>
</div>
@endforeach
@endsection