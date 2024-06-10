function validateadmin() {
  var pseudo = document.getElementById("pseudo").value;
  var cle = document.getElementById("cle").value;

  if (!alpha(pseudo)) {
    alert("Le pseudo doit être de cette façon 'RB_exemplepsuedo'");
    return false;
  }

  if (!pass(cle)) {
    alert("La clé doit contenir des nombres et des lettres");
    return false;
  }

  return true;
}

function alpha(pseudo) {
  if (pseudo.length < 3 || pseudo.substring(0, 3) !== 'RB_') {
    return false;
  }

  var i = 3;
  while (i < pseudo.length) {
    var char = pseudo.charAt(i);
    if (!((char >= 'a' && char <= 'z') || (char >= 'A' && char <= 'Z'))) {
      return false;
    }
    i++;
  }
  return true;
}

function pass(cle) {
  var hasLetter = false;
  var hasNumber = false;
  var i = 0;
  while (i < cle.length) {
    var char = cle.charAt(i);
    if ((char >= 'a' && char <= 'z') || (char >= 'A' && char <= 'Z')) {
      hasLetter = true;
    } else if (char >= '0' && char <= '9') {
      hasNumber = true;
    }
    i++;
  }
  return hasLetter && hasNumber;
}


