</div>




<i class="fas fa-bars" onclick="openmenu()"></i>
</nav>
<div class="slider-container">
<div class="slide" id="slide1"></div>
<div class="slide" id="slide2"></div>
<div class="slide" id="slide3"></div>
</div>
<div class="header-text">
<p>Full Stack Web Developer</p>
<h1>Hi, I'm <span>Rasika</span> <br> jayasundara <br>From Sri Lanka</h1>
</div>

</div>

</div>
<!-----------about----------->
<div id="about">
<div class="container">
<div class="row">
<div class="about-col-1">
    <img src="images/IMG_5676.JPG" >
</div>  
<div class="about-col-2">
    <h1 class="sub-title">About Me</h1>
    <p>I am a full stack web developer. I can provide clean coad and pixel perfect Design.
        I also make the Website more & more interactive with web animation. A responsive Design makes your 
        website accessible to all users, regardless of their device. </p>

        <div class="tab-titles">
            <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
            <p class="tab-links" onclick="opentab('experience')">Experience</p>
            <p class="tab-links" onclick="opentab('education')">Education</p>

        </div>
        <div class="tab-contents active-tab" id="skills">
            <ul>
                <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                <li><span>Web Development</span><br>Web App interfaces</li>
                <li><span>App Development</span><br>Building Android/ios apps</li>
            </ul>
        </div>
        <div class="tab-contents" id="experience">
            <ul>
                <li><span>2023 - Current</span><br>Web Developer as freelancer</li>
                <li><span>2021 - 2023</span><br>Develop University managment system using c++ language<br>
                                                Develop Pharmacy management system using mysql, HTML, CSS, JAVA SCRIPT</li>
               
            </ul>
        </div> 
        <div class="tab-contents" id="education">
            <ul>
                <li><span>2022</span><br>UI/UX Design Training at NIBM Institute</li>
                <li><span>2021</span><br>Select as student University of Rajarata</li>
            </ul>
        </div>

</div>
</div>

</div>


</div>
<!----------------------services----------------------->

<div id="services">
<div class="container">
<h1 class="sub-title">My Services</h1>
<div class="services-list">
<div>
<i class="fa-solid fa-code"></i>
<h2>Web Design</h2>
<p>Every website should be built with two primary goals.Firstly, It needs
to a work across all devices.Another one is, it needs to be fast as possible.
</p>
<a href="#">Learn more</a>
</div>
<div>
<i class="fas fa-crop-alt"></i>
<h2>UI/UX Design</h2>
<p>For your webpage, 
I can choose a theme that showcases my skills and expertise in UI/UX design
</p>
<a href="#">Learn more</a>
</div>
<div>
<i class="fab fa-app-store-ios"></i>
<h2>App Design</h2>
<p>For your webpage, 
I can choose a theme that showcases my skills and expertise in app design.
</p>
<a href="#">Learn more</a>
</div>
</div>
</div>
</div>
<!---------------------portfolio--------------->
<div id="portfolio">
<div class="container">
<h1 class="sub-title">My Work</h1>
<div class="work-list">
<div class="work">
<img src="images/work-1.png">
<div class="layer">
<h3>Social Media App</h3>
<p>The app connects you yo the talented people around the world.
    Download it from play store.</p>
    <a href="#"><i class="fas fa-external-link-alt"></i></a>
</div>
</div>
<div class="work">
<img src="images/work-2.png">
<div class="layer">
<h3>Music App</h3>
<p>The app connects you yo the talented people around the world.
    Download it from play store.</p>
    <a href="#"><i class="fas fa-external-link-alt"></i></a>
</div>
</div>
<div class="work">
<img src="images/work-3.png">
<div class="layer">
<h3>Online Shopping App</h3>
<p>The app connects you yo the talented people around the world.
    Download it from play store.</p>
    <a href="#"><i class="fas fa-external-link-alt"></i></a>
</div>
</div>
</div>
<a href="#" class="btn">See more</a>
</div>
</div>
<!---------------contact------------>
<div id="contact">
<div class="container">
<div class="row">
<div class="contact-left">
<h1 class="sub-title">Contact Me</h1>
<p><i class="fas fa-paper-plane"></i>rasikajayasundara36@gmail.com</p>
<p><i class="fas fa-phone-square-alt"></i>0769392861</p>
<div class="social-icons">
<a href="https://www.facebook.com/rasika.jayasundara.336?mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a>
<a href="https://wa.link/l27xfs"><i class="fab fa-whatsapp"></i></a>
<a href="https://instagram.com/rasika.jayasundara.336?igshid=ZGUzMzM3NWJiOQ== "><i class="fab fa-instagram"></i></a>
<a href="https://www.linkedin.com/in/rasika-jayasundara-13929a260/"><i class="fab fa-linkedin"></i></a>
</div>
<a href="#" download class="btn btn2">Download CV</a>
</div>
<div class="contact-right">
<form name="submit-to-google-sheet">
<input type="text" name="Name" placeholder="Your Name" required>
<input type="email" name="Email" placeholder="Your Email" required>
<input type="phone number" name="Phone Number" placeholder="Your Phone Number" required>
<textarea name="Massage" rows="4" placeholder="Your Massage"></textarea>
<button type="submit" class="btn btn2">Submit</button>
</form>
<div id="msg"></div>
</div>

</div>
</div>
<div class="copyright">
<p>copyright @ Rasika. Made with <i class="fas fa-heart"></i> by RASI STUIDO</p>
</div>
</div>

<script>

var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");
function opentab(tabname){
for(tablink of tablinks){
tablink.classList.remove("active-link");
}
for(tabcontent of tabcontents){
tabcontent.classList.remove("active-tab");
}
event.currentTarget.classList.add("active-link");
document.getElementById(tabname).classList.add("active-tab");

}
</script> 

<script>
var sidemenu = document.getElementById("sidemenu");

function openmenu(){
sidemenu.style.right = "0";

}
function closemenu(){
sidemenu.style.right = "-200px";

}
// Image slider functionality
var slideIndex = 0;
showSlides();

function showSlides() {
var slides = document.getElementsByClassName("slide");
for (var i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
slideIndex++;
if (slideIndex > slides.length) {
slideIndex = 1;
}
slides[slideIndex - 1].style.display = "block";
setTimeout(showSlides, 3000); // Change slide every 3 seconds
}
</script>

<script>
const scriptURL = 'https://script.google.com/macros/s/AKfycbwlva0pS5vBiIheeGMZOUgg27-Z3sXFL1bHSW9SpVeTTXBtzwRjMA4kz2Ze-nBCR8nYYA/exec'
const form = document.forms['submit-to-google-sheet']
const msg = document.getElementById("msg")

form.addEventListener('submit', e => {
e.preventDefault()
fetch(scriptURL, { method: 'POST', body: new FormData(form)})
.then(response => {
msg.innerHTML = "Massage sent successfully"
setTimeout(function(){
msg.innerHTML = ""
},5000)
form.reset()
})
.catch(error => console.error('Error!', error.message))
})
</script>

</body>

</html>