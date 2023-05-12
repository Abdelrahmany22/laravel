@extends('frontend.layout.app')
@section('content')
<!-- Main Content -->
<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">Shopping Cart</h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Home</a></li>
							<li><span>Shopping Cart</span></li>
						</ul>
					</div>
				</div>
			
				<div class="container">
					<div class="page-cart">
						<div class="table-responsive">
							<table class="cart-summary table table-bordered">
								<thead>
									<tr>
										<th class="width-20">&nbsp;</th>
										<th class="width-80 text-center">Image</th>
										<th>Name</th>
										<th class="width-100 text-center">Unit price</th>
										<th class="width-100 text-center">Qty</th>
										<th class="width-100 text-center">Total</th>
									</tr>
								</thead>
								
								<tbody>
                                    @foreach($cartproducts as $cp)
                                    <?php
                                        
                                        $productdata=App\Models\Product::where('id',$cp->product_id)->get();

                                    ?>
                                    @foreach($productdata as $pdata)
									<tr>
										<td class="product-remove">
											<a title="Remove this item" class="remove" href="{{route('frontend.deleteFromCart',$cp->id)}}">
												<i class="fa fa-times"></i>
											</a>
										</td>
										<td>
											<a href="product-detail-left-sidebar.html">
												<img width="80" alt="Product Image" class="img-responsive" src="{{asset( 'assets/frontend/'. $pdata->image )}}">
											</a>
										</td>
										<td>
											<a href="product-detail-left-sidebar.html" class="product-name">{{$pdata->name}}</a>
										</td>
										<td class="text-center">
											$ {{$pdata->price}}
										</td>
										<td>
											<div class="product-quantity">
												<div class="qty">
													<div class="input-group">
														<input type="text" name="qty" value="{{$cp->quantity}}" data-min="1">
														<span class="adjust-qty">
															<span class="adjust-btn plus">+</span>
															<span class="adjust-btn minus">-</span>
														</span>
													</div>
												</div>
											</div>
										</td>
										<td class="text-center">
											${{$pdata->price * $cp->quantity}}
										</td>
									</tr>
									@endforeach

									@endforeach
									
								</tbody>
								
								<tfoot>
									<tr class="cart-total">
										<td rowspan="3" colspan="3"></td>
										<td colspan="2" class="text-right">Total products</td>
										<td colspan="1" class="text-center">$565</td>
									</tr>
									<tr class="cart-total">
										<td colspan="2" class="text-right">Total shipping</td>
										<td colspan="1" class="text-center">$10</td>
									</tr>
									<tr class="cart-total">
										<td colspan="2" class="total text-right">Total</td>
										<td colspan="1" class="total text-center">$575</td>
									</tr>
								</tfoot>
							</table>
						</div>
						
						<div class="checkout-btn">
							<a href="product-checkout.html" class="btn btn-primary pull-right" title="Proceed to checkout">
								<span>Proceed to checkout</span>
								<i class="fa fa-angle-right ml-xs"></i>
							</a>
						</div>
					</div>
				</div>
			</div>


@endsection