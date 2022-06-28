let emailEl=document.getElementById("floatingEmail");
let passEl=document.getElementById("floatingPass");
let unameEl=document.getElementById("floatingName");
let ageEl=document.getElementById("floatingAge");
let cityEl=document.getElementById("floatingCity");
let border1="2px solid red";
let border2="2px solid green";
let tdNode1=document.getElementById("error1");
let tdNode2=document.getElementById("error2");
let tdNode3=document.getElementById("error3");
let tdNode4=document.getElementById("error4");
let tdNode5=document.getElementById("error5");

function validate1(){
    tdNode1.textContent="";
    let emailId=emailEl.value;
    let exp=emailId.substring(emailId.indexOf('@')+1);
    if(emailId==''){
        tdNode1.textContent="*this field is required";
        emailEl.style.border = border1;
        return false;
    }
    else if(!emailId.includes('@') || exp==''){
        tdNode1.textContent="*Please put valid email id";
        emailEl.style.border = border1;
        return false;
    }
    else{
        emailEl.style.border = border2;
        return true;
    }
}

function validate2(){
    tdNode2.innerHTML="";
    let password=passEl.value;
    let regExp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])/;
    // console.log(regExp.test(password));
    if(password==''){
        tdNode2.textContent="*this field is required";
        passEl.style.border=border1;
        return false;
    }
    else if(regExp.test(password)==false){
        let spanNode=document.createElement("span");
        spanNode.textContent="the password should contain atleast one";
        let ulnode=document.createElement("ul");
        let linode1=document.createElement("li");
        linode1.textContent="Capital letter";
        let linode2=document.createElement("li");
        linode2.textContent="Small Letter";
        let linode3=document.createElement("li");
        linode3.textContent="Digit";
        let linode4=document.createElement("li");
        linode4.textContent="Special Symbol";
        ulnode.append(linode1,linode2,linode3,linode4);
        tdNode2.append(spanNode,ulnode);
        passEl.style.border=border1;
        return false;
    }
    else if(password.length<5 || password.length>12){
        tdNode2.textContent="Password should be atleast 5 and atmost 12 characters long";
        passEl.style.border=border1;
        return false;
    }
    else{
        passEl.style.border=border2;
        return true;
    }
}

function validate3(){
    tdNode3.textContent="";
    let uname=unameEl.value;
    let regExp = /^[A-Za-z]/;
    // console.log(regExp.test(uname));
    if(uname==''){
        tdNode3.textContent="*this field is required";
        unameEl.style.border=border1;
        return false;
    }
    else if(regExp.test(uname)==false){
        tdNode3.textContent="name should have only alphabets";
        unameEl.style.border=border1;
        return false;
    }
    else if(uname.length<3 || uname.length >10){
        tdNode3.textContent="uname must have atleast 3 and at most 10 chars";
        unameEl.style.border=border1;
        return false;
    }
    else{
        unameEl.style.border=border2;
        return true;
    }
}

function validate4(){
    tdNode4.textContent="";
    let age=ageEl.value;
    let regExp = /^([0-9]|[1-9][0-9]|100)/;
    // console.log(regExp.test(age));
    if(age==''){
        tdNode4.textContent="*this field is required";
        ageEl.style.border = border1;
        return false;
    }
    else if(regExp.test(age)==false){
        tdNode4.textContent="*Age should be consists only numbers";
        ageEl.style.border = border1;
        return false;
    }
    else{
        ageEl.style.border = border2;
        return true;
    }
}

function validate5(){
    tdNode5.textContent="";
    let city=cityEl.value;
    let regExp = /^[A-Za-z]/;
    // console.log(regExp.test(city));
    if(city==''){
        tdNode5.textContent="*this field is required";
        cityEl.style.border=border1;
        return false;
    }
    else if(regExp.test(city) == false){
        tdNode5.textContent="name should have only alphabets";
        cityEl.style.border=border1;
        return false;
    }
    else{
        cityEl.style.border=border2;
        return true;
    }
}

function validateForm(){
    let st1=validate1();
    let st2=validate2();
    let st3=validate3();
    let st4=validate4();
    let st5=validate5();
    return st1 && st2 && st3 && st4 && st5;
}