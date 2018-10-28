<?php


?>

<!DOCTYPE html>
<html>
<title>Earthplus</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="less/styles.css" >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class=""><img class="logo" src="images/logo.jpg " /></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small padding-top_20">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#donate" class="w3-bar-item w3-button">₦ DONATE</a>
      <a href="#news" class="w3-bar-item w3-button"><i class="fa fa-newspaper"></i> NEWS</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#donate" onclick="w3_close()" class="w3-bar-item w3-button">DONATE</a>
  <a href="#news" onclick="w3_close()" class="w3-bar-item w3-button">NEWS</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
    <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-globe w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Secure the earth</p>
      <p>The earth is the only habitat we have, the only environment we can survive in. It is our duty to keep the earth alive. This is what Earthplus is doing</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cloud w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Protect the environment</p>
      <p>The earth is the only habitat we have, the only environment we can survive in. It is our duty to keep the earth alive. This is what Earthplus is doing</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-globe w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Save the climate</p>
      <p>The earth is the only habitat we have, the only environment we can survive in. It is our duty to keep the earth alive. This is what Earthplus is doing.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-tree w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
  </div>
</div>



<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/caleb.jpg" alt="caleb" style="width:100%">
        <div class="w3-container">
          <h3>Caleb Adebayo</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Caleb is a graduate of the Obafemi Awolowo University, A Lawyer || Environmentalist || Performance Poet || Writer || Public Speaking Coach</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i><a href="mailto:earthplus@gmail.com"> Contact</a></button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/caleb.jpg" alt="caleb" style="width:100%">
        <div class="w3-container">
          <h3>Caleb Adebayo</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Caleb is a graduate of the Obafemi Awolowo University, A Lawyer || Environmentalist || Performance Poet || Writer || Public Speaking Coach</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i><a href="mailto:earthplus@gmail.com"> Contact</a></button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/caleb.jpg" alt="caleb" style="width:100%">
        <div class="w3-container">
          <h3>Caleb Adebayo</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Caleb is a graduate of the Obafemi Awolowo University, A Lawyer || Environmentalist || Performance Poet || Writer || Public Speaking Coach</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i><a href="mailto:earthplus@gmail.com"> Contact</a></button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/caleb.jpg" alt="caleb" style="width:100%">
        <div class="w3-container">
          <h3>Caleb Adebayo</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Caleb is a graduate of the Obafemi Awolowo University, A Lawyer || Environmentalist || Performance Poet || Writer || Public Speaking Coach</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i><a href="mailto:earthplus@gmail.com"> Contact</a></button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">14+</span>
    <br>Partners
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">55+</span>
    <br>Projects Done
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">89+</span>
    <br>Happy Clients
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">150+</span>
    <br>Meetings
  </div>
</div>

<!-- Work Section
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we've done for people</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6 gallery__mobile" style="margin-bottom:10px;">
      <img src="images/1.jpg" class="gallery"  onclick="onClick(this)" class="w3-hover-opacity" alt="Earthplus cleans Lagos">
    </div>
    <div class="w3-col l3 m6 gallery__mobile" style="margin-bottom:10px;">
      <img src="images/2.jpg" class="gallery" onclick="onClick(this)" class="w3-hover-opacity" alt="Earthplus washes Lagos">
    </div>
    <div class="w3-col l3 m6 gallery__mobile" style="margin-bottom:10px;">
      <img src="images/3.jpg" class="gallery" onclick="onClick(this)" class="w3-hover-opacity" alt="Earthplus free Service">
    </div>
    <div class="w3-col l3 m6 gallery__mobile" style="margin-bottom:10px;">
      <img src="images/4.jpg" class="gallery" onclick="onClick(this)" class="w3-hover-opacity" alt="Environmental Sanitation">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6 gallery__mobile" style="margin-bottom:10px;">
      <img src="images/5.jpg" class="gallery" onclick="onClick(this)" class="w3-hover-opacity" alt="Volunteer cleanup">
    </div>
    <div class="w3-col l3 m6 gallery__mobile" style="margin-bottom:10px;">
      <img src="images/6.jpg" class="gallery" onclick="onClick(this)" class="w3-hover-opacity" alt="Climate refurbishing">
    </div>
    <div class="w3-col l3 m6 gallery__mobile" style="margin-bottom:10px;">
      <img src="images/7.jpg" class="gallery" onclick="onClick(this)" class="w3-hover-opacity" alt="Earthplus in action">
    </div>
    <div class="w3-col l3 m6 gallery__mobile" style="margin-bottom:10px;">
      <img src="images/8.jpg" class="gallery" onclick="onClick(this)" class="w3-hover-opacity" alt="Sample earthplus picture">
    </div
  </div>
</div> -->

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

Skills Section
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>

<!-- Donate Section -->
<div class="w3-container w3-dark-grey"  id="donate" style="padding-left:0px !important; padding-right:0px !important">
  <h3 class="w3-center">DONATE</h3>
  <p class="w3-large w3-center">Support Earthplus.</p>
  <div class="w3-row-padding">
    <div class="w3-half w3-section">
      <div class="w3-ul w3-white w3-hover-shadow padding-bottom">
            <p class="w3-black w3-xlarge w3-center w3-padding-32">Pay Online</p>
            <form target="_blank" class="padding-30">
            <p><input class="w3-input w3-border" id="customerName" type="text" placeholder="Name" required name="Name"></p>
            <p><input class="w3-input w3-border" id="donateAmt" type="text" placeholder="Amount" required name="Amount"></p>
            <p><input class="w3-input w3-border" id="phoneNo" type="text" placeholder="Phone Number" required name="Phone No"></p>
            <p><input class="w3-input w3-border" id="email" type="text" placeholder="Email" required name="Email"></p>
            <p>
            <button class="w3-button w3-black" type="submit"  onclick="payWithPaystack()">
                <i class="fa fa-paper-plane"></i> PAY
            </button>
            </p>
        
                    <script src="https://js.paystack.co/v1/inline.js"></script>
                  
                   
                  <script>
                    function _(id){ return document.getElementById(id); }
                    function payWithPaystack(){
                      var handler = PaystackPop.setup({
                        key: 'pk_test_39d67628ea0d41f0f9651e83a558ffe56f55d940',
                        email: _("email").value,
                        amount: _("donateAmt").value,
                        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                        metadata: {
                           custom_fields: [
                              {
                                  display_name: _("customerName").value,
                                  variable_name: "mobile_number",
                                  value: _("phoneNo").value
                              }
                           ]
                        },
                        callback: function(response){
                            alert('success. transaction ref is ' + response.reference);
                        },
                        onClose: function(){
                            alert('window closed');
                        }
                      });
                      handler.openIframe();
                    }
                  </script>
      </form>
      </div>
      
    </div>
    <!-- <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div> -->
    <div class="w3-half w3-section">
      <div class="w3-white w3-hover-shadow">
        <p class="w3-black w3-xlarge w3-padding-32 w3-center">Bank details</p>
        <div class="padding-30">
          <p class="donate_bank">To make any donations, please pay into the account below or donate online:</p>
          <p class="donate_bank">Name: Earthplus Nigeria</p>
          <p class="donate_bank">Bank: Zenith Bank</p>
          <h2 class="w3-wide">Account: 0042882828</h2>
        </div> 
    </div>
  </div>
</div>

<!-- News Section -->
<div class="w3-container w3-white" style="padding:28px 16px" id="news">
    <p class="w3-large w3-center">Latest News</p>
  <div class="w3-quarter w3-light-grey">
    <div class=""><img src="images/sample.jpg" width="99%" /></div>
    <h5 class="w3-center"><b>Mercy scores 30 goals</b></h5>
    <p>This happend to the guy that sits beyond the repository is just a very litte sample since he is he last match barcelona played against... </p>
    <p><button>Read More</button></p>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div class="w3-row-padding">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Lagos, Nigeria</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +2348117894029</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: earthplus@gmail.com</p>
      <br>
      <form id="myForm" onsubmit="submitForm(); return false" method="POST">
        <p><input class="w3-input w3-border" id="name" type="text" placeholder="Name" required name="name"></p>
        <p><input class="w3-input w3-border" id="email" type="text" placeholder="Email" required name="email"></p>
        <p><input class="w3-input w3-border" id="subject"  type="text" placeholder="Subject" required name="subject"></p>
        <p><input class="w3-input w3-border" id="message" type="text" placeholder="Message" required name="message"></p>
        <p>
          <button class="w3-button w3-black" id="mybtn" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
          <span id="status"></span>
        </p>

      </form>
    </div>
    <div class="w3-half">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"></div>
    </div>
  </div>
</div>
<script>
  function _(id){ return document.getElementById(id); }
  function submitForm(){
    _("mybtn").disabled = true;
    _("status").innerHTML = 'Please wait...' ;
    var formdata = new FormData();
    formdata.append("name", _("name").value );
    formdata.append("email", _("email").value);
    formdata.append("message", _("message").value);
    formdata.append("subject", _("subject".value))

    var ajax = new XMLHttpRequest();
    ajax.open("POST", "mail_parser.php");
    ajax.onreadystatechange = function (){
      if(ajax.readyState == 4 && ajax.status == 200){
        if(ajax.responseText == "success"){
          ("my_form").innerHTML = '<h2>Thanks ' + _("name").value +', your message has been sent.</h2>';
        }else{
          _("status").innerHTML = ajax.responseText;
          _("mybtn").disabled = false;
        }
      }
      
    }
    ajax.send( formdata );
  }
</script>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <!--<p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p> ->
</footer>
 
<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}


// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
