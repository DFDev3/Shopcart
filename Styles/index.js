document.querySelectorAll("nav ul li a").forEach(function(element) {
    element.addEventListener("mouseover", function() {
        this.style.transform = "scale(1.1)";
    });
    
    element.addEventListener("mouseout", function() {
        this.style.transform = "scale(1)";
    });
});