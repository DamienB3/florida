<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/seal.png">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/slicknav.css">
	</head>
    <body>
    <div id="container">
    <div class="logo">
    <a href="index.html"><img src="images/seal.png" class="seal"></a>
        </div>
        <nav class="navigation">
            <a href="#" id="menu-icon"></a>
    <ul id="horizontal-list" style="list-style-type: none;">
        <li><a href="index.html" >Home</a></li>
        <li class="north"><a href="north.html">North</a></li>
        <li class="central"><a href="central.html">Central</a></li>
        <li class="south"><a href="south.html" class="current">South</a></li>
        <li class="credits"><a href="credits.html">Credits</a></li>
        
            </ul></nav></div>
    
 <div class="but">
	<input type="checkbox" class="checkbox" id="chk" />
	<label class="label" for="chk">
        <i class="day">DAY</i>
		<i class="night">NIGHT</i>
		<div class="ball"></div>
            </label></div><hr/>
        
        
    <br>
       <div class="row">
  <div class="column" id="row1">
    <div class="card">
      <h3>Miami</h3>
        <p></p>
      <p>Founded in 1896.</p>
      <p>Population: 470,900.</p>
    </div>
  </div>

  <div class="column" id="row2">
    <div class="card">
      <h3>Fort Lauderdale</h3>
         <p></p>
      <p>Known for Las Olas Boulevard.</p>
      <p>Population: 182,590.</p>
    </div>
  </div>
        </div>
           <div class="row">
  <div class="column" id="row1">
    <div class="card">
      <h3>Hollywood</h3>
         <p></p>
      <p>Known for the Anne Kolb Nature Center.</p>
      <p>Population: 154,800.</p>
    </div>
  </div>
  
  <div class="column" id="row2">
    <div class="card">
      <h3>Coral Springs</h3>
         <p></p>
      <p>City does not actually have natural springs.</p>
      <p>Population: 133,500.</p>
    </div>
  </div>
        </div>
            
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
         
    </body></html>