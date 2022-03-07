$(window).on('load', function() {
    document.getElementById("thumbnails").addEventListener("click", function(e) {
        if(e.target && e.target.nodeName == "img") {
            var srcValue = e.target.src.replace("small","medium");
            
            var titleValue = e.target.title;

            document.getElementById("Big").src = srcValue;
            document.getElementById("Big").title = titleValue;
            document.getElementById("caption").innerHTML = titleValue;
        }
     });

     document.getElementById("caption").addEventListener("onmouseover", function(e) {
        var caption = e.target.style.opacity = 80;
     });
     
     document.getElementById("caption").addEventListener("onmouseout", function(e) {
        var caption = e.target.style.opacity = 0;
     });
   });