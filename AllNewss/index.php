<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<html>
    <head>
        <title>
            News theme
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){ 
            $('.bringtop').click(function(){
                $("html, body").animate({ scrollTop: 0 }, 900);
            });
     
        });
        </script>

        <script type="text/javascript">
<!--
//preload images
var image1=new Image()
image1.src="home.jpg"
var image2=new Image()
image2.src="news.jpg"
var image3=new Image()
image3.src="business.jpg"
var image4=new Image()
image4.src="technology.jpg"
var image5=new Image()
image5.src="music.jpg"
var image6=new Image()
image6.src="sports.jpg"
//-->
</script>
    </head>
    
    <body>
        
	
	<!-- here starts facebook code -->
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
	<!-- here was facebook code -->

        <div class="top_bar">
            
            <div class="top_bar_content">
            <span class="reg_log">
                <a href="#" id="signin">Sign In</a> &nbsp; | &nbsp;
                <a href="#" id="register">Register</a>
            </span>
               
            <span class="top_bar_contact">
                <a href="mailto:contact@site.com">Contact us: contact@site.com</a>
            </span>
            </div>
 
        </div>
        
        <div class="main_page">
            
            <div class="header">
                <div class="logo">
                    <a href="index.html">
                    <span class="logo_all">ALL</span><span class="logo_news">News</span>
                    </a>
                    <p>An easy way to find out more</p>
                </div>
                <a href="#">
                <span class="news_banner">
                    <!-- image for news banner is in style.css -->
                </span>
                </a>
            </div>
            
            <div class="menu">
                <ul class="nav">

                        <li><a href="index.php" class="selected">Home</a></li>
                        <li><a href="news.php">News</a>
                            <ul class="dropdown">
                                    <li><a href="news.php">Euismod</a></li>
                                    <li><a href="news.php">Tincidunt</a></li>
                                    <li><a href="news.php">Laoreet</a></li> 
                                    <li><a href="news.php">Ut wisi</a></li>
                            </ul>
                        </li> 

                        <li><a href="business.php">Business</a>
                            <ul class="dropdown">
                                    <li><a href="business.php">Minim veniam</a></li>
                                    <li><a href="business.php">Quis nostrud</a></li>
                                    <li><a href="business.php">Exerci tation</a></li> 
                            </ul>
                        </li>
                        <li><a href="technology.php">Technology</a>
                            <ul class="dropdown">
                                    <li><a href="technology.php">Suscipit</a></li>
                                    <li><a href="technology.php">Lobortis</a></li>
                                    <li><a href="technology.php">Aliquip ex</a></li> 
                                    <li><a href="technology.php">Commodo</a></li>
                            </ul>
                        </li>
                        <li><a href="music.php">Music</a>
                            <ul class="dropdown">
                                    <li><a href="music.php">Duis autem</a></li>
                                    <li><a href="music.php">Hendrerit</a></li>  
                            </ul>
                        </li>
                        <li><a href="sports.php">Sports</a>
                            <ul class="dropdown">
                                    <li><a href="sports.php">Vulputate</a></li>
                                    <li><a href="sports.php">Molestie</a></li>
                                    <li><a href="sports.php">Dignissim</a></li> 
                            </ul>
                        </li>
                
                </ul>
                <div style="clear:both"></div>
            </div>

            <div class="search">    
                <form method="post" action="search.php">
                    <input type="text" name="search" id="search" placeholder="Search..." />
                    <input type="image" id="search_button" name="searach_button" value="" />
                </form>
            </div>

            <a href="javascript:slidelink()">
<img src="home.jpg" name="slide" border="0" width="800" height="262" /></a>
<script type="text/javascript">
<!--
var step=1
var whichimage=1
function slideit(){
if (!document.images)
return
document.images.slide.src=eval("image"+step+".src")
whichimage=step
if (step<6)
step++
else
step=1
setTimeout("slideit()",5000)
}
slideit()
function slidelink(){
if (whichimage==1)
window.location="link1.htm"
else if (whichimage==2)
window.location="link2.htm"
else if (whichimage==3)
window.location="link3.htm"
else if (whichimage==4)
window.location="link4.htm"
else if (whichimage==5)
window.location="link5.htm"
else if (whichimage==6)
window.location="link6.htm"
}
-->
</script>
			
            <div class="clear"></div>
            
            <div class="content">
                
                <div class="cars">
                    <div class="content_title"><span>Cars</span></div> 
                    <a href="#"><img src="images/news/home/2014-lamborghini-venenor.JPG" /></a>
                    
                    <ul>
                        <li><img src="images/star.png" alt="star" /></li>
                        <li><img src="images/star.png" alt="star" /></li>
                        <li><img src="images/star.png" alt="star" /></li>
                        <li><img src="images/star.png" alt="star" /></li>
                        <li><img src="images/star2.png" alt="star" /></li>
                        <a href="#"><img class="home_like_button" src="images/news/home/facebook_like_thumb.png" alt="like" /></a>
                    </ul>
                    
                    <span class="content_details"><p>The fastest car in the world</p>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, 
                        consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et.
                    </span>
                </div>
                
                <div class="luxury_homes">
                    <div class="content_title"><span>Luxury Homes</span></div>
                    <a href="#"><img src="images/news/home/scottsdale-luxury-home-azd.JPG" /></a>
					
					<ul>
                        <li><img src="images/star.png" alt="star" /></li>
                        <li><img src="images/star.png" alt="star" /></li>
                        <li><img src="images/star.png" alt="star" /></li>
                        <li><img src="images/star.png" alt="star" /></li>
                        <li><img src="images/star2.png" alt="star" /></li>
                        <a href="#"><img class="home_like_button" src="images/news/home/facebook_like_thumb.png" alt="like" /></a>
                    </ul>
					
                    <span class="content_details"><p>Sed ut perspiciatis unde omnis iste</p>
                        Ut enim ad minima veniam, quis nostrum exercitationem ullam 
                        corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur autem vel eum iure.
                   </span>
                </div>
                
                <div class="clear"></div>
                
				<div class="content_title"><span>Travel</span></div>
                <div class="travel">
                    <ul>						
                        <li><a href="#"><img src="images/news/home/hammock.JPG" /></a><p>At vero eos et  et iusto</p></li>
                        <li><a href="#"><img src="images/news/home/beach.JPG" /></a><p>Temporibus autem</p></li>
                        <li><a href="#"><img src="images/news/home/dolphins.JPG" /></a><p> Nam libero tempo cum</p></li>
                    </ul>
                    <ul>
                        <li><a href="#"><img src="images/news/home/pool.PNG" /></a><p>Neque porro quisquam</p></li>
                        <li><a href="#"><img src="images/news/home/house.PNG" /></a><p>Ut enim ad minima</p></li>
                        <li><a href="#"><img src="images/news/home/route.PNG" /></a><p>Quis autem vel eum</p></li>
                    </ul>
                </div>
				
				<div class="content_title"><span>Future</span></div>
				<div class="electronics">
                    <a href="#"><img src="images/news/home/future1.JPG" /></a>
               
                    <span class="content_details"><p>The fastest car in the world</p>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, 
                        consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et.
                    </span>
					
                </div>
				
				<div class="power">
                    <a href="#"><img src="images/news/home/future2.JPG" /></a>
                
                    <span class="content_details"><p>The fastest car in the world</p>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, 
                        consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et.
                    </span>
					
                </div>
            </div>
			
            <div class="right_menu">
			
				<div class="media">
					<div class="fb-like-box" data-href="http://www.facebook.com/FacebookDevelopers" data-width="230" data-height="260" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
				</div>
				
				<div class="first_banner">
					<a href="#"><img src="images/news/home/smartphone-iphone-5.png" alt="phone" /></a>
				</div>
				
				<div class="newsletter">
					<form method="post" action="newsletter.php">
					<p>Newsletter</p>
						<input type="text" id="newsletter" name="newsletter" placeholder="Email..." />
						<input type="image" id="newsletter_button" name="send" value="" onclick="alert('Thank you for subscrbe');"/>
					</form>
				</div>
				
				<div class="second_banner">
					<a href="#"><img src="images/news/home/watches.png" alt="watches" /></a>
				</div>
                
            </div>
            
        </div>
		
		<div class="clear"></div>
		
        <div class="spansaw">
            
        </div>
        
		<div class="footer_wrapper">
        <div class="footer">
		
			<div class="left_side">
			
				<div class="footer_logo">
					<span class="footer_logo_all">ALL</span><span class="footer_logo_news">News</span>
				</div>
				<div class="footer_media">
					<ul>
						<a href="#" target="_blank"><li class="facebook"></li></a>
						<a href="#" target="_blank"><li class="twitter"></li></a>
						<a href="#" target="_blank"><li class="googlep"></li></a>
						<a href="#" target="_blank"><li class="youtube"></li></a>
					</ul>
				</div>
				<div class="footer_contact">
					<span class="email_phone">Contact us: name@site.com</span><br />
					<span class="email_phone">Phone: 273 162 43</span>
				</div>
			
			</div>
			
			<div class="middle_side">
				<span class="middle_title">Today 12.09.2013</span><br />
				<a href="#"><img src="images/news/footer/Apple_Ipad.png" alt="news" /></a>
			</div>
			
			<div class="right_side">
				<span class="middle_title">More news</span><br />
					<ul>
						<li><a href="#"><img src="images/news/footer/mic.jpg" alt="news" /></a></li>
						<li><a href="#"><img src="images/news/footer/car.jpg" alt="news" /></a></li>
						<li><a href="#"><img src="images/news/footer/horse.jpg" alt="news" /></a></li>						
					</ul>
					<ul>							
						<li><a href="#"><img src="images/news/footer/hand.jpg" alt="news" /></a></li>
						<li><a href="#"><img src="images/news/footer/music.jpg" alt="news" /></a></li>
						<li><a href="#"><img src="images/news/footer/microphone-and-headphones.jpg" alt="news" /></a></li>	
					</ul>	
			</div>
		
        </div>
        </div>
		
		<div class="links_wrapper">

        <div class="footer_links">	
            <div class="author">
				<span class="autor_text">&copy; 2013 by Viny's Design</span>
			</div>
			<div class="link_details">
				<ul>
					<li><a href="#">LIVE |</a></li>
					<li><a href="#">Sports |</a></li>
					<li><a href="#">Privacy |</a></li>
					<li><a href="#">About us</a></li>
				</ul>
			</div>

            <!-- Button when click go to the top of page-->
            <a href="#" class="bringtop"><img src="images/botton12.png" /></a>

        </div>
    </body>
</html>