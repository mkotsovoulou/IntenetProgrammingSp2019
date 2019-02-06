console.log("begin of script");
x=true;

function Write() {
 secret = document.getElementById("secret");
 if (x) {
    secret.innerHTML="Hello";
    x=false;
  } else {
    secret.innerHTML="";
    x=true;
  }
}
  function validate() {
    usernameTF = document.getElementById("username");
    message = document.getElementById("message");
    x = usernameTF.value.length;
    //console.log(x);
    if (x <= 5) {
      message.innerHTML= "Username failed length validation. Please choose more than 5 characters.";
    message.className = "red";
  } else {
    message.innerHTML = "OK!";
    message.className = "green";
  }
}

function createTable() {
   rows = document.getElementById("rows").value;
   columns = document.getElementById("columns").value;
   tableCode = "";
   tableCode += "<table border='1'>";
   for (r=1; r<=rows; r++) {
    tableCode += "<tr>"; 
     for (c=1; c<=columns; c++){
        tableCode += "<td> Hello </td>";
     }
    tableCode += "</tr>"; 
   }
   tableCode += "</table>";
  
  document.getElementById("tableArea").innerHTML= tableCode;
}