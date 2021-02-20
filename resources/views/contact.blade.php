<!DOCTYPE html>
<html>
<head>
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
 <!-- about -->
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

	<title>
	</title>
</head>
<body>
<nav class="navbar">
	<div class="row0">
		<div class="logo"><a href="#"> CV </a></div>
		<ul class="heading"> 
			<li><a href="#"> ABOUT</a></li>
			<li><a href="#">SKILLS</a></li>
			<li> <a href="#">EDUCATION</a></li>
			<li><a href="#">REFERENCES</a></li>
			<li><a href="#">CONTACT ME</a></li>
		</ul>
		</div>
	</div>
</div>
</nav>


<section class="home" id="home">
<div class="row0">
	<div class="home-content">
		<img src="{{asset('srcs/IMG_0852.jpg')}}" class="img" >
		<div class="t1" >Tynyshtyk Suiindikova</div>
		<p class="t2">	software engineer, graphic designer</p>
	</div>
</div>
</section>
    <section class="contact" id="contact">
			<div class="contactCont">
    		        <div class="row0">
        			<h2 class="aboutTxt">CONTACT </h2>

				<div class="contactCont">
           			<div class="column right">
                    <div class="text">Message me</div>
						<form action="#">
                      	  <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
							<div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
							</div>
							<div class="field">
                            <input type="text" placeholder="Subject" required>
                        	</div>
							<div class="field textarea">
                            <changeit cols="30" rows="10" placeholder="Message.." required></changeit>
                       		 </div>
							<div class="button">
                            <button type="submit">Send message</button>
             		           </div>
							</form>
							</div>
							</div>

							</div>
					</div>
					</section>


</body>
</html>