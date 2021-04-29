<!-- Side bar -->
<nav class="sideBar w3-bar-block w3-collapse w3-large theme-l5 w3-animate-left" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
        <i class="fa fa-remove"></i>
    </a>
    <h4 class="w3-bar-item"><b>Menu</b></h4>
    <a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/questions.php">Start</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/question2.php">Question 2</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/question3.php">Question 3</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">Question 4</a>
</nav>
<script>
    // JavaScript
    //Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");
    var overlayBg = document.getElementById("myOverlay");
    // Toggle between showing and hiding the sidebar
    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
        } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
        }
    }
    // Close the sidebar
    function w3_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
    }
</script>