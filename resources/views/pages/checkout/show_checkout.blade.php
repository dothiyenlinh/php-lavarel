@extends('welcome')
@section('content')

	<section id="cart_items">
		<div style="margin-left: 10%">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Điền thông tin nhận hàng</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout-customer')}}" method="POST">
									{{csrf_field() }}
									<input type="text" name="shipping_email" placeholder="Email*">
									<input type="text" name="shipping_name" placeholder="Họ và tên">
									<input type="text" name="shipping_address" placeholder="Địa chỉ">
									<input type="text" name="shipping_phone" placeholder="Số diện thoại">
									<textarea name="shipping_notes" placeholder=" Ghi chú đơn hàng" rows=""></textarea>
									<input type="submit" name="send_order" value="Gửi" class="btn btn-primary btn-sm">
								</form>
							</div>
						</div>
			</div>
			<!-- <div class="review-payment">
				<h2>Xem lại giỏ hàng</h2>
			</div>

			<div class="table-responsive cart_info">
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div> -->
		</div>
	</section> <!--/#cart_items-->

@endsection