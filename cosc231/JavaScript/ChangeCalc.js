function getChange(){
    var cash=document.getElementById("cash").value;
    var quarters=Math.floor(cash/25);
    cash%=25;
    var dimes=Math.floor(cash/10);
    cash%=10;
    var nickels=Math.floor(cash/5);
    cash%=5;
    var pennies=cash;
    var total = "Change back..."+"<br/>"+"Quarters: " + quarters
    +"<br/>"+" Dimes: "+dimes
    +"<br/>"+"Nickels: "+nickels
    +"<br/>"+"Pennies: "+pennies;
    document.getElementById("outputTotal").innerHTML=total;
}