var x;
function scramble(){
    x=Math.floor(Math.random()*100);
    console.log(x);
}
scramble();
function guess(){
    var guess=document.getElementById("guess").value;
    var name=document.getElementById("name").value;
    var result;
    if(guess>x)result="Sorry "+name+", but your guess was too high";
    else if(guess<x)result="Sorry "+name+", but your guess was too low";
    else if(guess==x){
        result="Congratulations, "+name +"!"+ "<br/>"
            +"Enter a new number to try again!";
        scramble();
    }
    else result="ERROR";
    document.getElementById("result").innerHTML=result;
}