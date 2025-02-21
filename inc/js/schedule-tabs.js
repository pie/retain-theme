document.addEventListener('DOMContentLoaded', function() {
    function openTab(evt, tabName) {
        var i, tabcontent, tabbuttons;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tabbuttons = document.getElementsByClassName("tab-button");
        for (i = 0; i < tabbuttons.length; i++) {
            tabbuttons[i].className = tabbuttons[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Attach the openTab function to the global scope
    window.openTab = openTab;

    // Check viewport width and apply default tab only for screens 768px and above
    if (window.innerWidth >= 768) {
        document.querySelector('.tab-button.active').click();
    }

    // Re-evaluate on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth < 768) {
            // Show all tabs on small screens
            var tabcontent = document.getElementsByClassName("tab-content");
            for (var i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "block";
            }
        } else {
            // Trigger the first tab by default on larger screens
            document.querySelector('.tab-button.active').click();
        }
    });
});
