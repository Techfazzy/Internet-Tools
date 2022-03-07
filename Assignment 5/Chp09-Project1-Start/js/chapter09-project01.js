function    setBackground(e)    {
    if  (e.type ==  "focus")    {
       e.target.style.backgroundColor  =   "#FFE0B2";
    }
    else    if  (e.type ==  "blur") {
        e.target.style.backgroundColor  =   "white";
    }
}

window.addEventListener("load", function(){
    let fields  =   document.querySelectorAll(".hilightable");
    for (i=0;   i<fields.length;    i++)
    {
        fields[i].addEventListener("focus", setBackground);
        fields[i].addEventListener("blur",  setBackground);
    }
});
// above solution was figured from the textbook plus class documents


document.getElementById("mainForm").addEventListener("submit", function()

{
    let title = document.getElementById("title").value; 
    let description = document.getElementById("description"); 
    let year = document.getElementById("year"); 
    if (title == "") {
        e.preventDefault();
       title.classList.add("error");
    }

    if (description == ""){
         e.preventDefault();
        description.classList.add("error");
    }
    if (year == ""){
        e.preventDefault();
        year.classList.add("error");
    }
    else{
        title.classList.remove("error");
        description.classList.remove("error")
        year.classList.remove("error")
    }

});

