function validateconfirm() 
{

  var numrobe= document.getElementById("numrobe").value
  var numclt = document.getElementById("numclt").value
  var datedeb = document.getElementById("datedeb").value
  var datefin = document.getElementById("datefin").value

  if (numerique(numrobe) == false || Number(numrobe) < 1 ) 
  {
    alert("le numero du robe est un chiffre positive")
    return false
  }

  if (numerique(numclt) == false || Number(numclt) < 1)  
  {
    alert("le numero du client est un chiffre positive")
    return false
  }

  if (datedeb > datefin) 
  {
    alert("date debut doit etre avant la date fin")
    return false
  }
  return true
  
}

  function numerique(ch)
{
    for(i=0;i<length;i++)
    {
        if(ch[i]<"0" || ch[i]>"9")
        {
            return false
        }
    }
}
function alpha(ch)
{
    ch1=substring(ch,0,4)
    ch2=substring(ch,4,ch.length)
    for(i=0;i<ch1.length;i++)
    {
        if(ch1[i]>"Z" || ch1[i]<"A")
        {
            return false
        }
        if(numerique(ch2)==false)
        {
            return false
        }
    }
}

