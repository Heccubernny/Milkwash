function sp(){
    var chose
    if(confirm("Do you want to proceed to the payment page?")== true){
        chose =alert("You will be proceed to the next page");
    }else{
        chose = "You have cancelled your requests"
    }
    document.getElementById("sep").innerHTML = chose;
}