var x=Math.floor(Math.random()*10);
function scramble(){
    x=Math.floor(Math.random()*10);
}
function guess(){
    var guess=document.getElementById("guess").value;
    var result;
    if(guess>x)result="Sorry "+document.getElementById("name").value+", but your guess was too high";
    else if(guess<x)result="Sorry "+document.getElementById("name").value+", but your guess was too low";
    else if(guess==x){
        result="Congratulations "+document.getElementById("name").value+"!"+"<br/>"
            +"Enter a new number to try again!";
        scramble();
    }
    else result="ERROR";
}