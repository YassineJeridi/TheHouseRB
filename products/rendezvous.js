function valider_rendez_vous()
{
    var nom = document.getElementById("name").value;
    var tel = document.getElementById("tel").value;
    

    if(alpha(nom)==false || nom==""||nom.length<3)
    {
        alert("nom invalid");
        return false;
    }
    if(num(tel)==false || tel == "" || tel.length != 8) 
    {
        alert("telepohne invalid");
        return false;
    } 

    var dateInput = document.getElementById("date").value;
    const currentDate = new Date();
    var inputDate = new Date(dateInput);

    if (inputDate <= currentDate || inputDate=="") 
    {
        alert("Date invalide");
        return false;
    }
    var selectElement = document.getElementById("taille");
    var selectedIndex = selectElement.selectedIndex;
    var taille = selectElement.options[selectedIndex].value;
    if (taille === "0") 
    {
        alert("Veuillez choisir une taille.");
        return false;
    }

 }


function num(ch)
{
    for(i=0;i<length;i++)
    {
        if(ch.charAt(i)<"0" || ch.charAt(i)>"9")
        {
            return false;
        }
    }
    return true;
}
function alpha(ch)
{
    ch=ch.toUpperCase();
    for(i=0;i<length;i++)
    {
        if(ch.charAt(i)<"A" || ch.charAt(i)>"Z")
        {
            return false;
        }
    }
    return true;
}