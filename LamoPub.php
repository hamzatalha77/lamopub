<?php
include('header.php')
?>

<div class="banner">
    <div class="sliderr">
        <img src="assets/images/7.jpg" alt="" id="slideImg" />
    </div>
    <div class="overlay">
        <div class="content"></div>
    </div>
</div>
<!-- header section starts  -->

<!-- header section ends -->

<!-- home section starts  -->

<!-- home section ends -->

<!-- abuout section starts  -->

<section id="about" class="about" data-aos="fade-in">
    <h1 class="heading">à propos de nous</h1>

    <div class="row">
        <div class="content">
            <h3>We build websites that build your busines</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea amet
                iure deserunt doloremque voluptate distinctio rerum! Quas sunt
                inventore illum facere minus voluptas fugit, magni quidem cumque!
                Animi, illo magni.
            </p>
            <a href="#"><button class="btn1">En savoir plus</button></a>
        </div>

        <div class="image">
            <img src="assets/images/Logo LAMOPUB PNG.png" alt="" />
        </div>
        <img src="assets/images/play.png" class="play-btn" onclick="playVideo('assets/images/video.mp4')" />
    </div>
    <div class="video-player" id="videoPlayer">
        <video width="100%" controls autoplay id="myVideo">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>
        <img src="assets/images/close.png" class="close-btn" onclick="stopVideo()" />
    </div>
</section>

<!-- abuout section ends  -->

<!-- service section starts  -->

<section id="service" class="service">
    <h1 class="heading">Nos services</h1>

    <div class="row" data-aos="fade-right">
        <div class="image">
            <img src="assets/images/1.jpg" alt="" />
        </div>
        <div class="content">
            <h3>Conception</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde
                voluptatem, tempore hic deserunt vel temporibus aperiam recusandae
                ratione, obcaecati at qui accusamus enim, laudantium eveniet.
                Inventore voluptas nemo placeat. Voluptas.
            </p>
            <a href="#"><button class="btn">En savoir plus</button></a>
        </div>
    </div>

    <div class="row" data-aos="fade-left">
        <div class="content">
            <h3>impression</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde
                voluptatem, tempore hic deserunt vel temporibus aperiam recusandae
                ratione, obcaecati at qui accusamus enim, laudantium eveniet.
                Inventore voluptas nemo placeat. Voluptas.
            </p>
            <a href="#"><button class="btn">En savoir plus</button></a>
        </div>
        <div class="image">
            <img src="assets/images/2.jpg" alt="" />
        </div>
    </div>

    <div class="row" data-aos="fade-right">
        <div class="image">
            <img src="assets/images/3.jpg" alt="" />
        </div>
        <div class="content">
            <h3>Ennseigne</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde
                voluptatem, tempore hic deserunt vel temporibus aperiam recusandae
                ratione, obcaecati at qui accusamus enim, laudantium eveniet.
                Inventore voluptas nemo placeat. Voluptas.
            </p>
            <a href="#"><button class="btn">En savoir plus</button></a>
        </div>
    </div>

    <div class="row" data-aos="fade-left">
        <div class="content">
            <h3>Digital</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde
                voluptatem, tempore hic deserunt vel temporibus aperiam recusandae
                ratione, obcaecati at qui accusamus enim, laudantium eveniet.
                Inventore voluptas nemo placeat. Voluptas.
            </p>
            <a href="#"><button class="btn">En savoir plus</button></a>
        </div>
        <div class="image">
            <img src="assets/images/4.jpg" alt="" />
        </div>
    </div>

    <div class="row" data-aos="fade-right">
        <div class="image">
            <img src="assets/images/5.jpg" alt="" />
        </div>
        <div class="content">
            <h3>Evémenctiel</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde
                voluptatem, tempore hic deserunt vel temporibus aperiam recusandae
                ratione, obcaecati at qui accusamus enim, laudantium eveniet.
                Inventore voluptas nemo placeat. Voluptas.
            </p>
            <a href="#"><button class="btn">En savoir plus</button></a>
        </div>
    </div>

    <div class="row" data-aos="fade-left">
        <div class="content">
            <h3>Fourniture Bureautique</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde
                voluptatem, tempore hic deserunt vel temporibus aperiam recusandae
                ratione, obcaecati at qui accusamus enim, laudantium eveniet.
                Inventore voluptas nemo placeat. Voluptas.
            </p>
            <a href="#"><button class="btn">En savoir plus</button></a>
        </div>
        <div class="image">
            <img src="assets/images/6.jpg" alt="" />
        </div>
    </div>
</section>

<!-- service section ends -->

<!-- team section starts  -->

<!-- <section id="team" class="team" data-aos="fade-out">
      <h1 class="heading">our team</h1>

      <div class="row">
        <div class="card">
          <div class="image">
            <img src="assets/images/pic1.png" alt="" />
          </div>
          <div class="info">
            <h3>someone's name</h3>
            <span>web designer</span>
            <div class="icons">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-instagram"></a>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="image">
            <img src="assets/images/pic2.png" alt="" />
          </div>
          <div class="info">
            <h3>someone's name</h3>
            <span>web designer</span>
            <div class="icons">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-instagram"></a>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="image">
            <img src="assets/images/pic3.png" alt="" />
          </div>
          <div class="info">
            <h3>someone's name</h3>
            <span>web designer</span>
            <div class="icons">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-instagram"></a>
            </div>
          </div>
        </div>
      </div>
    </section> -->
<!-- <h1 class="heading1">our team</h1>
    <section class="team" id="team">
        <div class="card" data-aos="fade-right">
            <div class="bg-image">
                <img src="assets/images/gradient-wallpaper-with-geometrical-shapes_23-2148795930.jpg" alt="" />
            </div>
            <div class="pic">
                <img src="assets/images/perfil.jpg" alt="" />
            </div>
            <div class="info">
                <h3>Hamza Talha</h3>
                <span> <i class="fas fa-laptop-code"></i> &nbsp; Web Dev</i></span>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                    illo suscipit tenetur rem minus blanditiis laudantium vel voluptatem
                </p>
                <div class="icons">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>
        <div class="card" data-aos="fade-out">
            <div class="bg-image">
                <img src="assets/images/gradient-wallpaper-with-geometrical-shapes_23-2148795930.jpg" alt="" />
            </div>
            <div class="pic">
                <img src="assets/images/pic4.png" alt="" />
            </div>
            <div class="info">
                <h3>Hamza Talha</h3>
                <span> <i class="fas fa-paint-brush"></i> &nbsp; Web design</i></span>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                    illo suscipit tenetur rem minus blanditiis laudantium vel voluptatem
                </p>
                <div class="icons">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>
        <div class="card" data-aos="fade-left">
            <div class="bg-image">
                <img src="assets/images/gradient-wallpaper-with-geometrical-shapes_23-2148795930.jpg" alt="" />
            </div>
            <div class="pic">
                <img src="assets/images/pic3.png" alt="" />
            </div>
            <div class="info">
                <h3>Hamza Talha</h3>
                <span> <i class="far fa-copy"></i> &nbsp; factory</i></span>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                    illo suscipit tenetur rem minus blanditiis laudantium vel voluptatem
                </p>
                <div class="icons">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>
    </section> -->
<!-- contact section starts  -->

<section class="contact">
    <h1 class="heading">contactez Nous</h1>

    <div id="contact" class="row">
        <div class="image" data-aos="fade-right">
            <img src="assets/images/conatct.png" alt="" />
        </div>

        <div class="form-container" data-aos="fade-left">
            <!-- <form action="" method="Post"> -->
            <div class="inputBox">
                <input type="text" id="name" placeholder="Your Name" />
            </div>
            <input type="email" id="email" placeholder="email" />
            <input type="text" id="subject" placeholder="subject" />
            <textarea id="body" cols="30" rows="10" placeholder="message"></textarea>
            <input type="button" id="btt" onclick="sendEmail()" value="envoyer" />
            <!-- </form> -->
        </div>
    </div>
</section>

<!-- contact section ends -->

<!-- FAQ section starts  -->

<section id="faq" class="faq">
    <h1 class="heading">FAQ</h1>

    <div class="row">
        <div class="image" data-aos="fade-left">
            <img src="assets/images/1682869.png" alt="" />
        </div>

        <div class="accordion-container" data-aos="fade-right">
            <div class="accordion">
                <div class="accordion-header">
                    <span>+</span>
                    <h3>How much will it cost?</h3>
                </div>
                <div class="accordion-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi
                        atque possimus ipsum quae error ullam reiciendis in iste maiores
                        nulla. Impedit nam praesentium omnis cupiditate excepturi natus
                        magnam sunt deleniti!
                    </p>
                </div>
            </div>

            <div class="accordion">
                <div class="accordion-header">
                    <span>+</span>
                    <h3>How To update website?</h3>
                </div>
                <div class="accordion-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi
                        atque possimus ipsum quae error ullam reiciendis in iste maiores
                        nulla. Impedit nam praesentium omnis cupiditate excepturi natus
                        magnam sunt deleniti!
                    </p>
                </div>
            </div>

            <div class="accordion">
                <div class="accordion-header">
                    <span>+</span>
                    <h3>is domain provided free?</h3>
                </div>
                <div class="accordion-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi
                        atque possimus ipsum quae error ullam reiciendis in iste maiores
                        nulla. Impedit nam praesentium omnis cupiditate excepturi natus
                        magnam sunt deleniti!
                    </p>
                </div>
            </div>

            <div class="accordion">
                <div class="accordion-header">
                    <span>+</span>
                    <h3>how long it takes to design?</h3>
                </div>
                <div class="accordion-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi
                        atque possimus ipsum quae error ullam reiciendis in iste maiores
                        nulla. Impedit nam praesentium omnis cupiditate excepturi natus
                        magnam sunt deleniti!
                    </p>
                </div>
            </div>

            <div class="accordion">
                <div class="accordion-header">
                    <span>+</span>
                    <h3>is it seo freindly?</h3>
                </div>
                <div class="accordion-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi
                        atque possimus ipsum quae error ullam reiciendis in iste maiores
                        nulla. Impedit nam praesentium omnis cupiditate excepturi natus
                        magnam sunt deleniti!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ section ends -->

<!-- footer section starts  -->

<?php
include('footer.php')
?>
<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
<!-- footer section ends -->

<!-- jquery file link  -->

<!--===== MAIN JS =====-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
function sendEmail() {
    var name = $("#name");
    var email = $("#email");
    var subject = $("#subject");
    var body = $("#body");

    if (
        isNotEmpty(name) &&
        isNotEmpty(email) &&
        isNotEmpty(subject) &&
        isNotEmpty(body)
    ) {
        $.ajax({
            url: "sendEmail.php",
            method: "POST",
            dataType: "json",
            data: {
                name: name.val(),
                email: email.val(),
                subject: subject.val(),
                body: body.val(),
            },
            success: function(response) {
                if (response.status == "success") alert("Email Has Been Sent!");
                else {
                    alert("Please Try Again!");
                    console.log(response);
                }
            },
        });
    }
}

function isNotEmpty(caller) {
    if (caller.val() == "") {
        caller.css("border", "1px solid red");
        return false;
    } else caller.css("border", "");

    return true;
}
</script>
<script type="text/javascript">
var slideImg = document.getElementById("slideImg");
var images = new Array(
    "assets/images/Ma carte visite verco2.png",
    "assets/images/4.jpg",
    "assets/images/6.jpg",
    "assets/images/7.jpg"
);
var len = images.length;
var i = 0;

function sliderr() {
    if (i > len - 1) {
        i = 0;
    }
    slideImg.src = images[i];
    i++;
    setTimeout("sliderr()", 3000);
}
$(window).on("scroll", function() {
    if ($(window).scrollTop()) {
        $("header").addClass("black");
    } else {
        $("header").removeClass("black");
    }
});
</script>
<script>
AOS.init({
    offset: 400,
    duration: 1000,
});
</script>
<script type="text/javascript">
var videoPlayer = document.getElementById("videoPlayer");
var myVideo = document.getElementById("myVideo");

function stopVideo() {
    videoPlayer.style.display = "none";
}

function playVideo(file) {
    myVideo.src = file;
    videoPlayer.style.display = "block";
}
</script>
<script type="text/javascript">
$(window).on("load", function() {
    $(".loader-wrapper").fadeOut("slow");
});
</script>
</body>

</html>