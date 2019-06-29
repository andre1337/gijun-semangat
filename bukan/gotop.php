<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

#mytop1 {
  display: none;
  position: fixed;
  bottom: 5px;
  right: 10px;
  z-index: 99;
  font-size: 14px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 6px;
}

#mytop1:hover {
  background-color: #555;
}
</style>

<button onclick="topFunction()" id="mytop1" title="Go to top">UP</button>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    document.getElementById("mytop1").style.display = "block";
  } else {
    document.getElementById("mytop1").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>