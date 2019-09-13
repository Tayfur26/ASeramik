<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <meta charset="utf8_general_ci" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Asel Seramik</title>
		<link rel="stylesheet" type="text/css" href="css/hepsi.css" />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
       
</head>    
<body>   
<div class="container demo-2">
		
            <header class="clearfix">
			
				<h1>Asel Seramik <span><font face="cabin" >Geleceğe tutulan ışık</font></span></h1>
				
				<nav class="codrops-demos">
					
					<a class="current-demo" href="index.php">Giriş</a>
					<a href="urunler.php">Ürünler</a>					
					<a href="basvuru.php">Kurs Başvurusu</a>
					<a href="iletisim.php">İletişim</a>
					<a href="index2.php">Yönetici Paneli</a>
				</nav>
				
			</header>

            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
							<h2>Sanatsal Ürünler</h2>
							<br>
							<blockquote><p>Güç olduğunu gayet iyi biliyoruz; ama özel olanın yorumu ve işlenmesi sanatın asıl hayatıdır.</p><cite>WoIfgang Van Goethe</cite></blockquote>
						</div>
					</div>
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
							<a href="urunler.php#end"><h2>Endüstriyel Ürünler<h2></a>
							<blockquote><p>Sanat karşılık beklemeksizin büyük emek ister. Tamamen kişinin kendisiyle olan kavgası, coşkusu, duygularının şekil almasıdır.</p><cite>Asena Picakci</cite></blockquote>
						</div>
					</div>
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
							<br>
							<a href="basvuru.php"><h2>Torna Eğitimi<h2></a>
							
							<blockquote><p>Ruhun elle birlikte çalışmadığı yerde, sanat olmaz.</p><cite>Leonardo da Vinci</cite></blockquote>
						</div>
					</div>
								
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-4"></div>
							<br><br>
							<a href="basvuru.php"><h2>Sırlama Eğitimi<h2></a>
							
							<blockquote><p>Güneşin çiçekleri renklendirmesi gibi, sanat da hayata renk verir. </p><cite>Lord Aubery</cite></blockquote>
						</div>
					</div>
					
					
				</div><!-- /sl-slider -->

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					
				</nav>

			</div><!-- /slider-wrapper -->

			<div class="content-wrapper">
				<a href="iletisim.php"><h2>Asel Seramik Hakkında</h2></a>
				<p><font face="cabin" >Negatif enerjinizi atmanin en güzel yoludur toprak. 
				Ellerinizde hayat bulur ve sizler şekillendirdiğiniz çamuru yaşamin bir parçası haline getirirsiniz. 
				Seramik yapmanin mutluluğu, tadı, coşkusu hiç bir yerde yoktur ... </font></p>
			</div>

        </div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="js/jquery.slitslider.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();


			
			});
		</script>
   
  
   
 
</body> 
</html>
