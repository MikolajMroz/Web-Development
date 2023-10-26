
window.onload = function preparepage()                  //when home page has loaded, prepare overlay
{

  var date = new Date(); //set date from system
  var day = date.getDate(); //select day, month, year
  var month = date.getMonth()+1; //starts counting from 0, meaning we need to add one for it to be accurate.
  var year= date.getFullYear();

  document.getElementById("date").innerHTML = //find element in page
  "Today's Date: " + day + "/" + month + "/" + year; //structure as follows
  
    var overlay = document.getElementById("overlay");   //find div id = overlay and set it as a js variable
    overlay.addEventListener("click", function() {      //wait for user to click the overlay and perform function
		$("#overlay").fadeOut(1000);                        //function = fade out overlay for 1 second
  });
  
  //used "\r\n as breaks, since certain browsers can't process \n on its own"
  var accept = confirm("Do you consent to the use of cookies? If not, you will not have access to the site.\r\nWe abide by the following procedures set out by the Cookie Law and GDPR 2018:\r\nLawfulness, fairness and transparency: The data we store will not feature any system information or information about the user.\r\nPurpose limitation: Any data stored must be used appropriately.\r\nData minimization:The data we collect is the minimum required for functionality of the site.\r\nAccuracy: Data does not contain any information which requires updating.\r\nStorage limitation: Data will be stored only for the length of the current session.\r\nIntegrity and confidentiality: Data does not contain personal information, thus encryption is not necessary.\r\nAccountability: I, the data controller, am responsible for any handling and processing of this data on the user's computer.\r\nFor more informaiton visit the following sites:\r\nhttps://gdpr.eu/what-is-gdpr/\r\nhttps://www.cookielaw.org/the-cookie-law/")
  if( accept == true ) {
    return true;
  } else {
    window.location.href = "index.html"
    return false;}
}
