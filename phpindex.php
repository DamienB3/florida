<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/seal.png">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/slicknav.css">
    
    
	</head><body>
    <div id="container">
    <div class="logo">
    <a href="index.html"><img src="images/seal.png" class="seal"></a>
        </div>
        <nav class="navigation">
            <a href="#" id="menu-icon"></a>
    <ul id="horizontal-list" style="list-style-type: none;">
        <li><a href="index.html" class="current">Home</a></li>
        <li class="north"><a href="north.html">North</a></li>
        <li class="central"><a href="central.html">Central</a></li>
        <li class="south"><a href="south.html">South</a></li>
        <li class="credits"><a href="credits.html">Credits</a></li>
        
            </ul></nav></div>

 <div class="but">
	<input type="checkbox" class="checkbox" id="chk" />
	<label class="label" for="chk">
        <i class="day">DAY</i>
		<i class="night">NIGHT</i>
		<div class="ball"></div>
            </label></div><hr/>
    <h1 class="header">Welcome to Florida, the best state in America! This website divides the beautiful Sunshine state into three parts.</h1>
<div class="slideshow-container">


<div class="mySlides fade">
  <img src="images/jacksonville.jpg" style="width:100%">
  <div class="text">Jacksonville</div>
    </div>

<div class="mySlides fade">
  <img src="images/orlando.jpg" style="width:100%">
  <div class="text">Orlando</div>
</div>

<div class="mySlides fade">
  <img src="images/beach.jpg" style="width:100%">
  <div class="text">Miami</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
    <br>

        <footer class="footer">
           <div class="fcf-body">

    <div id="fcf-form">
    <h3 class="fcf-h3">Contact me</h3>

    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
        

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" autofocus required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
                <textarea id="Message" placeholder="Any message typed here will be received to my email. Thank you!" name="Message" class="fcf-form-control" rows="2" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send</button>
            <button type="reset" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Reset</button>
        </div>

        <div class="fcf-credit" id="fcf-credit"><a href="https://www.freecontactform.com" target="_blank">FreeContactForm.com</a>
        </div>

    </form>
    </div>

</div>
</footer>
        
<!--Script for Dark Mode button--><script>const chk = document.getElementById('chk');

chk.addEventListener('change', () => {
	document.body.classList.toggle('light');
   

});</script>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}
    </script></body>
</html>