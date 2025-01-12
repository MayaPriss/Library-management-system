function removebook() {    
  const bookid = document.remove_form.ID;    

  if (bookid.value.length <= 0) { 
      bookid.style.border = '2px red solid';
      const error = document.getElementById('message');
      error.innerHTML = " *All the fields are required";
      error.style.visibility = 'visible';  
      bookid.focus();    
      return false;    
  }
  else {
      bookid.style.border = '2px green solid';
      alert("You had removed a book.");    
 }    
}
