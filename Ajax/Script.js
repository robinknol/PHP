// bind de HTML id's
let firstName = document.getElementById("firstName").Value;
let lastName = document.getElementById("lastName").Value;
let age = document.getElementById("age").Value;
let email = document.getElementById("email").Value;
let submitButton = document.getElementById("submitButton");
let responseHere = document.getElementById("responseHere");

// click event listener
// submitButton.addEventListener('click', ajax);

// ajax functie
function ajax()
{
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            responseHere.innerHTML = this.responseText;
        }
    }
    let queryString = "?firstName=" + firstName + "&lastName=" + lastName + "&age=" + age + "&email=" + email;
    
    // debuggen laat de http string zien
    console.log(queryString);
    // bereid de ajax actie voor
    xmlhttp.open("GET", "form_1.php" + queryString, true);
    xmlhttp.send(null); // doe het
}