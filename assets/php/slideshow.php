<div id="slideshow-container">
    <div id="intro">
        <img id="portrait" src="assets/img/hendrik.png" alt="hendrik">
        <h1 id="head-title">Hendrik Hogendijk:</h1>
        <p id="head-border" class="intro-text">"De tuin is een belangrijke plek van de woning, waar je
            het liefst zoveel mogelijk tijd in doorbrengt".</p>
        <p class="intro-text">
            Bij Hendrik Hovenier vinden wij het daarom belangrijk dat iedereen zich thuis voelt in
            zijn of haar tuin.
        </p>
    </div>
    <img class="mySlides fade" src="assets/img/slideshow_foto_3.png" width="1000" height="600" alt="slideshow">
    <img class="mySlides fade" src="assets/img/slideshow_foto_2.png" width="1000" height="600" alt="slideshow">
    <img class="mySlides fade" src="assets/img/slideshow_foto_1.png" width="1000" height="600" alt="slideshow">
</div>
<div style="display:none">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>
<script>
    let slideIndex = 1; // Start with the first slide immediately
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        // Reset slideIndex to 0 when it exceeds the number of slides - 1
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        dots[slideIndex - 1].className += " active";
        slideIndex++;
        setTimeout(showSlides, 5000); // Change image every 5 seconds
    }
</script>