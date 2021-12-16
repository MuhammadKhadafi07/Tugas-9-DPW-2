<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Tugas-3-DPW-2|HOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Suity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{url('public')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="{{url('public')}}/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{url('public')}}/js/jquery-1.11.1.min.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close2').on('click', function(c){
		$('.message2').fadeOut('slow', function(c){
	  		$('.message2').remove();
		});
	});	  
});
</script>
</head>
<body>
<!-- start navbar -->
@include('ecommerce.section.navbar')
<!-- end navbar -->
<div class="content_top">
	<div class="container">
		<div class="col-md-3">
			<ul class="menu1">
				<li class="item1"><a href="#" class="">What To Buy ?<img class="arrow-img" src="{{url('public')}}/images/arrow.png" alt=""/> </a>
					<ul class="cute" style="display: none; overflow: hidden;">
						<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
						<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
						<li class="subitem3"><a href="single.html">Automatic Fails </a></li>
					</ul>
		         </li>
			 </ul>
			<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu1_ul = $('.menu1> li > ul'),
			           menu1_a  = $('.menu1 > li > a');
			    menu1_ul.hide();
			    menu1_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu1_a.removeClass('active');
			            menu1_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
		<div class="box1">
			<ul class="box1_list">
				<li><a href="#">Jeans</a></li>
				<li><a href="#">Hoodies</a></li>
				<li><a href="#">Watches</a></li>
				<li><a href="#">Suits</a></li>
				<li><a href="#">Ties</a></li>
				<li><a href="#">Shirts</a></li>
				<li><a href="#">T-Shirts</a></li>
				<li><a href="#">Underwear</a></li>
				<li><a href="#">Accessories</a></li>
				<li><a href="#">Caps & Hats</a></li>
			</ul>
		</div>
		<ul class="box2_list">
				<li><a href="#">New Arrivals</a></li>
				<li><a href="#">Sales</a></li>
				<li><a href="#">Collection '15</a></li>
				<li><a href="#">Mystery</a></li>
				<li><a href="#">Story Behind</a></li>
				<li><a href="#">About US</a></li>
				<li><a href="#">Contacts</a></li>
		 </ul>
		 <ul class="box3_list">
				<li><a href="#">New Arrivals</a></li>
				<li><a href="#">Sales</a></li>
				<li><a href="#">Collection '15</a></li>
				<li><a href="#">Mystery</a></li>
				<li><a href="#">Story Behind</a></li>
				<li><a href="#">About US</a></li>
				<li><a href="#">Contacts</a></li>
		 </ul>
		</div>
		<div class="col-md-9 content_right">
		   <div class="client_box">
			<ul class="clients">
				<li><img src="{{url('public')}}/images/c1.png" class="img-responsive" alt=""/></li>
				<li><img src="{{url('public')}}/images/c2.png" class="img-responsive" alt=""/></li>
				<li><img src="{{url('public')}}/images/c3.png" class="img-responsive" alt=""/></li>
				<li><img src="{{url('public')}}/images/c4.png" class="img-responsive" alt=""/></li>
			</ul>
		   </div>
		   <div class="content_right-box">
			<div class="col-md-8">
			  <div class="grid1">
			    <h5>Watches</h5>
   				  <div class="view view-first">
                     <img src="{{url('public')}}/images/pic1.jpg" class="img-responsive" alt=""/>
   				       <a href="{{url('single')}}"><div class="mask">
   			            <h3>Quick Look</h3>
                        <p>-----Or----</p>
                        <h4>Add To Basket</h4>
                      </div></a>
                   </div> 
               <h6>$499</h6>
			  </div>
			   <div class="grid1 box4">
			    <h5>T-Shirt with print</h5>
   				  <div class="view view-first">
                     <img src="{{url('public')}}/images/pic2.jpg" class="img-responsive" alt=""/>
                     <a href="{{url('single')}}"><div class="mask mask1">
   			            <h3>Quick Look</h3>
                        <p>-----Or----</p>
                        <h4>Add To Basket</h4>
                      </div></a>
   				  </div> 
               <h6>$59</h6>
			  </div>
			</div>
			<div class="col-md-4">
			  <a href="{{url('single')}}"><div class="grid2">
				  <div class="view view-first">
                     <img src="{{url('public')}}/images/pic3.jpg" class="img-responsive" alt=""/>
   				      <h5>Cap</h5>
   				      <h6>$55</h6>
   			      </div> 
               </a></div>
			   <a href="{{url('single')}}"><div class="grid2 span_1">
				  <div class="view view-first">
                     <img src="{{url('public')}}/images/pic4.jpg" class="img-responsive" alt=""/>
   				      <h5>Glasses</h5>
   				      <h6>$244</h6>
   			      </div> 
              </div></a>
              <a href="{{url('single')}}"> <div class="grid2 span_1">
				  <div class="view view-first">
                     <img src="{{url('public')}}/images/pic5.jpg" class="img-responsive" alt=""/>
   				      <h5>Shoes</h5>
   				        <h6>$199</h6>
   			      </div> 
              </div></a>
			</div>
			<div class="clearfix"> </div>
		   </div>
		   <div class="box3">
			   <div class="col-md-4">
			    <a href="{{url('single')}}"> <div class="grid3 view view-first">
			   	   <img src="{{url('public')}}/images/pic6.jpg" class="img-responsive" alt=""/>
			   	</div></a>
			   </div>
			   <div class="col-md-4">
			     <a href="{{url('single')}}"><div class="grid3  view view-first">
			   	   <img src="{{url('public')}}/images/pic7.jpg" class="img-responsive" alt=""/>
			   	 </div></a>
			   </div>
			   <div class="col-md-4">
			     <a href="{{url('single')}}"><div class="grid3 view view-first">
			   	   <img src="{{url('public')}}/images/pic8.jpg" class="img-responsive" alt=""/>
			   	 </div></a>
			   </div>
			   <div class="clearfix"> </div>
			</div>
			<div class="box4">
				<div class="col-md-6">
				 <div class="grid1">
				    <h5>Shoes</h5>
	   				  <div class="view view-first">
	                     <img src="{{url('public')}}/images/pic9.jpg" class="img-responsive" alt=""/>
	   				       <a href="{{url('single')}}"><div class="mask mask2">
	   			            <h3>Quick Look</h3>
	                        <p>-----Or----</p>
	                        <h4>Add To Basket</h4>
	                      </div></a>
	                   </div> 
		               <h6>$199</h6>
				  </div>
				</div>
				<div class="col-md-6">
				   <div class="grid1">
				    <h5>Purse</h5>
	   				  <div class="view view-first">
	                     <img src="{{url('public')}}/images/pic10.jpg" class="img-responsive" alt=""/>
	   				       <a href="{{url('single')}}"><div class="mask mask2">
	   			            <h3>Quick Look</h3>
	                        <p>-----Or----</p>
	                        <h4>Add To Basket</h4>
	                      </div></a>
	                   </div> 
		               <h6>$295</h6>
				  </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>   
<!-- start footer -->
@include('ecommerce.section.footer')
<!-- end footer -->
</body>
</html>		