window.onload = function(){
  var sub = document.getElementById("SubBtn");
  sub.addEventListener("click", function(){
    let url = "login.php";
    let email = document.getElementById("emailAd").value;
    let password = document.getElementById("password").value;

  
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if(this.readyState === this.DONE && this.status === 200){
        let result = this.responseText;

        

       
        if (result === "valid"){
        
          location.assign("dash.php");
        }else{
          alert("error");
        }
      }
    };

    xhttp.open("POST",url);
    xhttp.send("emailAd=" + email + "&password=" + password);

 });

}