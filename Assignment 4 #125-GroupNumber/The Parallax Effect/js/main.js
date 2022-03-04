
/*
GroupNumber #125
Farrell Adebo – 209664010
Dlama Wadawasina – 169672860
Armel Yepdieu – 219562830
*/

//just a fun javascript to show when the plane will takeoff not involved with parallax
(function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 1).padStart(2, "0"),
        yyyy = today.getFullYear(),
        nextYear = yyyy + 1,
        dayMonth = "05/18/",
        takeoff = dayMonth + yyyy;
    
    today = mm + "/" + dd + "/" + yyyy;
    if (today > takeoff) {
        takeoff = dayMonth + nextYear;
    }
    
    const countDown = new Date(takeoff).getTime(),
        x = setInterval(function() {    
  
          const now = new Date().getTime(),
                distance = countDown - now;
  
          document.getElementById("days").innerText = Math.floor(distance / (day)),
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
  
          if (distance < 0) {
            document.getElementById("headline").innerText = "Mission Complete!!!";
            document.getElementById("countdown").style.display = "none";
            document.getElementById("content").style.display = "block";
            clearInterval(x);
          }
        }, 0)
    }());