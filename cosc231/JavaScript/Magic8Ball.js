import * as Papa from "papaparse";

var responses=Papa.parse("../cosc231/CSV/Responses.csv", {
    complete:function (results) {
        console.log(results);
    }
});
var x;
function roll(){
    x=Math.floor(Math.random()*responses.length);
}
roll();
function predict(){
    var result=responses[x];
    var n=document.getElementById("name");
    var q=document.getElementById("question");
    document.getElementById("answer").innerHTML="Hi, "+n+"! The answer to \""+q+"\" is:"
    +"<br/>"+result;
    roll();
}