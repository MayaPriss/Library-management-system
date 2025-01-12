function updatebook() {    
    const bookid = document.update_form.ID;    
    const title = document.update_form.Title;
    const author = document.update_form.Author;
    const category = document.update_form.Category;
    const edition = document.update_form.Edition;
    const publication = document.update_form.Publication;   

    if (bookid.value.length <= 0) { 
        bookid.style.border = '2px red solid';
        const error = document.getElementById('message');
        error.innerHTML = " *All the fields are required";
        error.style.visibility = 'visible';  
        bookid.focus();    
        return false;    
    }
    else{
        bookid.style.border = '2px green solid';
    }    
    if (title.value.length <= 0) {    
        title.style.border = '2px red solid';    
        const error = document.getElementById('message');
        error.innerHTML = " *All the fields are required";
        error.style.visibility = 'visible';  
        title.focus();    
        return false;    
    } 
    else{
        title.style.border = '2px green solid';
    }     
    if (author.value.length <= 0) {    
        author.style.border = '2px red solid';     
        const error = document.getElementById('message');
        error.innerHTML = " *All the fields are required";
        error.style.visibility = 'visible';  
        author.focus();    
        return false;    
    }   
    else{
        author.style.border = '2px green solid';
    }   
    if (category.value == "choosemodule") {    
        category.style.border = '2px red solid';  
        const error = document.getElementById('message');
        error.innerHTML = " *All the fields are required";
        error.style.visibility = 'visible';  
        category.focus();    
        return false;    
    }
    else{
        category.style.border = '2px green solid';
    }  
    if (edition.value.length <= 0) {    
        edition.style.border = '2px red solid';   
        const error = document.getElementById('message');
        error.innerHTML = " *All the fields are required";
        error.style.visibility = 'visible';    
        edition.focus();    
        return false;    
    }   
    else{
        edition.style.border = '2px green solid';
    }       
    if (publication.value.length <= 0) {    
        publication.style.border = '2px red solid';    
        const error = document.getElementById('message');
        error.innerHTML = " *All the fields are required";
        error.style.visibility = 'visible';  
        publication.focus();    
        return false;    
    }      
    else{
        publication.style.border = '2px green solid';
    }  

    if (bookid.value.length && title.value.length && author.value.length && category.value.length && edition.value.length && publication.value.length) {
        alert("The record had updated succesfully");
    }
    return false;    


}    
