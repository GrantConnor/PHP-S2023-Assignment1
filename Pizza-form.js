function showForm() {
    var formContainer = document.getElementById("form-container");
    var overlay = document.getElementById("overlay");
  
    formContainer.style.display = "flex";
    overlay.style.display = "block";
  
    setTimeout(function() {
      formContainer.style.opacity = "1";
      overlay.style.opacity = "1";
    }, 10);
  }

  function hideForm(){
    var formContainer = document.getElementById("form-container");
    var overlay = document.getElementById("overlay");
     
    formContainer.style.display = "none";
    overlay.style.display = "none";
    
    setTimeout(function() {
        formContainer.style.opacity = "0";
        overlay.style.opacity = "0";
      }, 10);
  }