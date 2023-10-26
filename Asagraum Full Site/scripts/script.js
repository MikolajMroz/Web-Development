window.onload = function() {
document.getElementById("button1").addEventListener("click", showReviewsDawn); //Detects when button has been clicked
document.getElementById("button2").addEventListener("click", showReviewsPotestas);
}

function showReviewsDawn() { //vanilla AJAX method
    var xhttp = new XMLHttpRequest(); //create new XML request  
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) { //If a connection is made..
        document.getElementById("reviews1").innerHTML = xhttp.responseText; //Find the reviews1 div on the page and place the contents of the text file in its place.
      }
    };
    xhttp.open("POST", "reviewsDawn.txt", true); //load contents of the review quotes file onto the page after button has been clicked
    xhttp.send();
  }


function showReviewsPotestas() //JQUERY AJAX method, condenses all of the above to just one line.
{
      $("#reviews2").load("reviewsPotestas.txt");
}