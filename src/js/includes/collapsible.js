document.addEventListener('DOMContentLoaded', function() {
    var coll = document.getElementsByClassName("collapsible");
  
    for (var i = 0; i < coll.length; i++) {
      // Wrap the existing text inside a span
      var span = document.createElement("span");
      span.classList.add("toggle-icon"); // Add class for styling
      span.textContent = "+";
  
      // Move the existing text into another span for separation
      var textSpan = document.createElement("span");
      textSpan.classList.add("collapsible-text");
      textSpan.textContent = coll[i].innerHTML;
  
      // Clear the button content and append spans
      coll[i].innerHTML = "";
      coll[i].appendChild(span);
      coll[i].appendChild(textSpan);
  
      // Add click event
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        var icon = this.querySelector(".toggle-icon");
  
        if (content.style.display === "block") {
          content.style.display = "none";
          icon.textContent = "+"; // Change to +
        } else {
          content.style.display = "block";
          icon.textContent = "-"; // Change to -
        }
      });
    }
  });