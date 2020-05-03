
function validate(){
    const name=document.getElementById("name-input");
const pass=document.getElementById("pass-input");
const cn=document.getElementsByClassName("console-text");
let flag=true;
    if(name.value===""){
        cn[0].innerText="NO Title!";
        flag=false;
    }
    if(pass.value===""){
        cn[0].innerText=cn[0].innerText+" no Body";
        flag=false;
    }

    if(name.value && pass.value){
        if(name.value.length>2){
        cn[0].innerHTML=`<h2>${name.value}</h2><i>${pass.value}`;}
        else{
            cn[0].innerText=`Too short title`;
        }
    }
    flag?alert("all good"):alert("you entered something wrong");
};