function verifcompte()
{
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var tel = document.getElementById("tlf").value;
    var age = document.getElementById("age").value;
    var pass = document.getElementById("password").value;
    var cpass = document.getElementById("confirmpassword").value;
    if(alpha(nom)==false || nom==""||nom.length<3)
    {
        alert("nom invalid");
        return false;
    }
    if(alpha(prenom)==false|| prenom==""||prenom.length<3)
    {
        alert("prenom invalid");
        return false;
    }
    if(num(tel)==false || tel == "" || tel.length != 8) 
    {
        alert("telepohne invalid");
        return false;
    } 
    if(Number(age)<18)
    {
        alert("age invalid");
        return false; 
    }
    if(pass.charAt(0) != pass.charAt(0).toUpperCase() || pass.length <6)
    {
        alert("logeur du mot de passe doit etre >= 6 et le perimer Charactere majuscule  ");
        return false;
    }
    if(pass!=cpass)
    {
        alert("confirm mot de pass est different de mot de pass");
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