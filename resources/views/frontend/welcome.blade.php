@extends('frontendLayouts.app')

@section('content')


<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    @foreach( $articleTypes as $articleType )
                        <li ><a href="#" onclick="getArticlesByType(this);" id="{{ $articleType['id'] }}">{{ $articleType['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->

   
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="{{ asset('assets/img/h4-slide.png') }}" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								iPhone <span class="primary">6 <strong>Plus</strong></span>
							</h2>
							<h4 class="caption subtitle">Dual SIM</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<!-- <li><img src="{{ asset('assets/img/h4-slide2.png') }}" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								by one, get one <span class="primary">50% <strong>off</strong></span>
							</h2>
							<h4 class="caption subtitle">school supplies & backpacks.*</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="{{ asset('assets/img/h4-slide3.png') }}" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Apple <span class="primary">Store <strong>Ipod</strong></span>
							</h2>
							<h4 class="caption subtitle">Select Item</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="{{ asset('assets/img/h4-slide4.png') }}" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								Apple <span class="primary">Store <strong>Ipod</strong></span>
							</h2>
							<h4 class="caption subtitle">& Phone</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li> -->
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="{{ asset('assets/img/brand1.png') }}" alt="">
                            <img src="{{ asset('assets/img/brand2.png') }}" alt="">
                            <img src="{{ asset('assets/img/brand3.png') }}" alt="">
                            <img src="{{ asset('assets/img/brand4.png') }}" alt="">
                            <img src="{{ asset('assets/img/brand5.png') }}" alt="">
                            <img src="{{ asset('assets/img/brand6.png') }}" alt="">
                            <img src="{{ asset('assets/img/brand1.png') }}" alt="">
                            <img src="{{ asset('assets/img/brand2.png') }}" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-product-widget">
                        <span class="single-product-data"></span>
                       
                      
                        
                    </div>
                </div>
               
            </div>
        </div>
    </div> <!-- End product widget area -->

    <script>
    getArticles();
    function getArticlesByType(btn){
        getArticles(btn);
        $('html, body').animate({
            scrollTop: $('.brand-list').offset().top
        }, 1000);
                
    }
    function getTwentyFivePercent(price) {
        return price + ((price * 25) / 100);
    }
    function getArticles(btn = false){
        
        if(btn)
            url = "getArticles" + '/' + btn.id;
        else {
            url = 'getArticles';
        }
        $.ajax({
        type: "GET",
        url : url,
            success: function(data) {
                var data = $.parseJSON(data);
                html = '';
                if(data.length){
                    $.each(data, function(i){
                        console.log(data[i]['name']);
                        html += `
                        <div class="col-md-4">
                            <div class="single-wid-product">
                                <a href="#"><img src="{{ asset('assets/img/dummy-product.png') }}" alt="" class="product-thumb"></a>
                                <h2><a href="#">`+data[i]['article_name']+`</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>€`+data[i]['price']+`</ins> <del>€`+ getTwentyFivePercent(data[i]['price']) +` </del>
                                </div>                            
                            </div>
                        </div>`;
                    });
                }else {
                    html = '<span><b>There are no Article found of this Article Type.</b></span>';
                }
                
                    $('.single-product-data').html(html);
            }
                 
        });
    }
    </script>
    @endsection
