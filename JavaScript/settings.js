mybutton = document.getElementById("myTop");
window.onscroll = function() {scrollFunction()};
  
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  function topFunction() {
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0; 
  }

  function myUpdate() {
    alert("Profile Updated!");
  }
  function myReset() {
    if (confirm("Reset Changes?")) {
      txt = "Reset successful!";
    } else {
      txt = "Reset failed.";
    }
    document.getElementById("resetAcc").innerHTML = txt;
    document.getElementById("nameForm").reset();
  }

  function myFunction() {
    if (confirm("Delete account?")) {
      txt = "Account successfully deleted!";
    } else {
      txt = "Account not deleted.";
    }
    document.getElementById("deleteAcc").innerHTML = txt;
  }

input = document.getElementById("password");
text = document.getElementById("warning");
input.addEventListener("keyup", function(event) {
  
  if (event.getModifierState("CapsLock")) {
      text.style.display = "block";
    } else {
      text.style.display = "none"
    }
  });

  function myPassword() {
    alert("Password successfully changed!");
  }

  function myAuthentication() {
    if (confirm(" We'll ask you for a login code in addition to your password when you log in on a device we don't recognise.")) {
      txt = "Two-factor authentication is on";
    } else {
      txt = "Two-factor authentication is off";
    }
    document.getElementById("authButton").innerHTML = txt;
    }

