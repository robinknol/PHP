function ajax()
{

    var ajaxCall = new XMLHttpRequest();
    ajaxCall.onreadystatechange = function()
    {
        if (ajaxCall.readyState === 4)
        {
            document.getElementById("responseHere").innerHTML = ajaxCall.responseText;
        }
    }
    
    let firstName = document.getElementById("firstName").value;
    let lastName = document.getElementById("lastName").value;
    let age = document.getElementById("age").value;
    let email = document.getElementById("email").value;
    let queryString = "?firstName=" + firstName + "&lastName=" + lastName + "&age=" + age + "&email=" + email;
    
    ajaxCall.open("GET", "form.php" + queryString, true);
    ajaxCall.send(null);
}