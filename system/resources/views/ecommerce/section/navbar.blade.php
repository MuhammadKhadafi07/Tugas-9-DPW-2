<div class="index-banner">
    <div class="container">
	  <div class="header_top">
   		<div class="logo">
			<a href="{{url('home')}}">Khadafi</a>
		</div>	
		<div class="header-bottom-right">
	       <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#">My Cart </a><div class="rate">3</div>
						<ul class="sub-icon1 list">
						  <h3>Recently added items(3)</h3>
						  <div class="shopping_cart">
							  <div class="cart_box">
							   	 <div class="message">
							   	     <div class="alert-close"> </div> 
					                <div class="list_img"><img src="{{url('public')}}/images/1.jpg" class="img-responsive" alt=""/></div>
								    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                            <div class="cart_box">
							   	 <div class="message1">
							   	     <div class="alert-close1"> </div> 
					                <div class="list_img"><img src="{{url('public')}}/images/2.jpg" class="img-responsive" alt=""/></div>
								    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                            <div class="cart_box1">
								  <div class="message2">
							   	     <div class="alert-close2"> </div> 
					                <div class="list_img"><img src="{{url('public')}}/images/3.jpg" class="img-responsive" alt=""/></div>
								    <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                        </div>
	                        <div class="total">
	                        	<div class="total_left">CartSubtotal : </div>
	                        	<div class="total_right">$250.00</div>
	                        	<div class="clearfix"> </div>
	                        </div>
                            <div class="login_buttons">
							  <div class="check_button"><a href="{{url('checkout')}}">Check out</a></div>
							  <div class="login_button"><a href="{{url('login')}}">Login</a></div>
							  <div class="clearfix"></div>
						    </div>
					      <div class="clearfix"></div>
						</ul>
					 </li>
		      </ul>
              <div class="clearfix"></div>
          </div>
		<div class="menu">																
			<a href="#" class="right_bt" id="activator"><img src="{{url('public')}}/images/menu.png" alt=""/></a>
				<div class="box" id="box">
				   <div class="box_content_center">
					   <div class="menu_box_list">
						   <ul>
							   <li><a href="{{url('home')}}">New Arrivals</a></li>
							   <li class="active"><a href="{{url('sales')}}">Sales</a></li> 
							   <li><a href="{{url('sales')}}">Collection</a></li> 
							   <li><a href="{{url('about')}}">About Us</a></li>
							   <li><a href="{{url('contact')}}">Contact</a></li>
						   </ul>
						</div>
						<a class="boxclose" id="boxclose"><img src="{{url('public')}}/images/close.png" alt=""/></a>
					  </div>                
					</div>
			                 <script type="text/javascript">
								var $ = jQuery.noConflict();
									$(function() {
										$('#activator').click(function(){
												$('#box').animate({'left':'0px'},500);
										});
										$('#boxclose').click(function(){
												$('#box').animate({'left':'-2300px'},500);
										});
									});
									$(document).ready(function(){
									
									//Hide (Collapse) the toggle containers on load
									$(".toggle_container").hide(); 
									
									//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
									$(".trigger").click(function(){
										$(this).toggleClass("active").next().slideToggle("slow");
										return false; //Prevent the browser jump to the link anchor
									});
									
									});
								</script>
			         </div> 	
			         <div class="clearfix"></div>		
		      </div>
		</div>	
	    <div class="wmuSlider example1">
			    <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
						<h1>Flawless time.</h1>
					</div>
				 </article>
				 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
						<h1>Lorem Ipsum.</h1>
					</div>
				 </article>
				  <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
						<h1>Adpising adit.</h1>
					</div>
				 </article>
		  </div>
                  <script src="{{url('public')}}/js/jquery.wmuSlider.js"></script> 
					<script>
       				     $('.example1').wmuSlider();         
   					</script> 	           	      
</div>