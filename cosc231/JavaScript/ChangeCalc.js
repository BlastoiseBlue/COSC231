function getChange(){
    var cash=document.getElementById("cash").value;
    var twenties=Math.floor(cash/20);
    cash%=20;
    var tens=Math.floor(cash/10);
    cash%=10;
    var fives=Math.floor(cash/5);
    cash%=5;
    var dollars=Math.floor(cash);
    cash%=1;
    cash*=100;
    var quarters=Math.floor(cash/25);
    cash%=25;
    var dimes=Math.floor(cash/10);
    cash%=10;
    var nickels=Math.floor(cash/5);
    cash%=5;
    var pennies=Math.floor(cash);
    var total = "Change back..."
        +"<br/>"+"Twenties: "+twenties
        +"<br/>"+"Tens: "+tens
        +"<br/>"+"Fives: "+fives
        +"<br/>"+"Ones: "+dollars
        +"<br/>"+"Quarters: " + quarters
        +"<br/>"+" Dimes: "+dimes
        +"<br/>"+"Nickels: "+nickels
        +"<br/>"+"Pennies: "+pennies;
    document.getElementById("outputTotal").innerHTML=total;
}