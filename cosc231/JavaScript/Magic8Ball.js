//import * as Papa from "C:/Users/emmet/.WebStorm2018.2/config/javascript/extLibs/global-types/node_modules/@types/papaparse/index.d.ts";
//import Papa from "papaparse";

var x;
var responses;
//File r=new File("../cosc231/CSV/Responses.csv");
//responses=Papa.parse("https://people.emich.edu/estanevi/cosc231/CSV/Responses.csv");

//var str;
//str=("It is certain","It is decidedly so","Without a doubt","Yes definitely","You may rely on it","As I see it, yes","Most likely","Outlook good","Yes","Signs point to yes","Reply hazy try again","Ask again later","Better not tell you now","Cannot predict now","Concentrate and ask again","Don't count on it","My reply is no","My sources say no","Outlook not so good","Very doubtful");
responses=["It is certain","It is decidedly so","Without a doubt","Yes definitely","You may rely on it","As I see it, yes","Most likely","Outlook good","Yes","Signs point to yes","Reply hazy try again","Ask again later","Better not tell you now","Cannot predict now","Concentrate and ask again","Don't count on it","My reply is no","My sources say no","Outlook not so good","Very doubtful"];
//document.getElementById("answer").innerHTML=responses;
function roll(){
    x=Math.floor(Math.random()*responses.length);
}
roll();
function predict(){
    var result=responses[x];
    var n=document.getElementById("name").value;
    var q=document.getElementById("question").value;
    var a="Hi, "+n+"! The answer to \""+q+"\" is:"
    +"<br/>"+result;
    document.getElementById("answer").innerHTML=a;
    roll();
}