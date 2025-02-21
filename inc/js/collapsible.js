document.addEventListener('DOMContentLoaded', function() {

  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].innerHTML = "+ " + coll[i].innerHTML; // Add + to the button text initially
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.display === "block") {
        content.style.display = "none";
        this.innerHTML = "+ " + this.innerHTML.substring(2); // Change to + when closed
      } else {
        content.style.display = "block";
        this.innerHTML = "- " + this.innerHTML.substring(2); // Change to - when open
      }
    });
  }

});