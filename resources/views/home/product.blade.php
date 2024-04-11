<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               @foreach($product as $products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$products->id)}}" class="option1">
                           More details
                           </a>
                           <a >
                           Add to Cart
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                        {{$products->title}}
                        </h5>
                        @if($products->discount_price)
                       
                        <h6>
                        Rs. <s>{{$products->price}}</s> {{$products->discount_price}}
                        </h6>

                        @else
                        <h6>
                        Rs. {{$products->price}}
                        </h6>
@endif
                     </div>
                  </div>
               </div>
               
            @endforeach
            <span style="padding:20px">
            {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}

            </span>
            
         </div>
      </section>