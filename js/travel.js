/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function validateForm() {
    var fName = document.forms["myForm"]["fName"].value;
    var lName = document.forms["myForm"]["lName"].value;
    var dest = document.forms["myForm"]["dest"].value;
    
    if (fName == null || fName == "") {
        alert("Please key in your First Name and proceed");
        return false;
    }
    if (lName == null || lName == "") {
        alert("Please key in your Last Name and proceed");
        return false;
    }
    if (dest == null || dest == "") {
        alert("Please key in your Destination Contry and proceed");
        return false;
    }
   

}