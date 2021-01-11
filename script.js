/*----------- regex email  -----------*/
const email = document.querySelector("#inputEmail");

const emailPattern = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/;
if (email.value.match(valeursAcceptees)){
    alert("correct email address structure");
    return true;
}
else{
    alert(alertMessage);
    email.focus();
    return false;
};

/*-----------  regex password -----------*/
const password = document.querySelector("#inputPassword");

const PasswordPattern = () => {
    const inputValue = e.target.value;
    const numbPattern = /(\d)+/;
    const majPattern = /[a-z]+/;
    const minPattern = /[A-Z]+/;
    const specialPattern = /(\W_)/;
    const caraNumbPattern = /(?=.{8,18})/;
    if ((passwordPattern.match(numbPattern)) && (inputValue.match(majPattern)) && (inputValue.match(minPattern)) && (inputValue.match(specialPattern)) && (inputValue.match(caraNumbPattern))){
        alert("correct password address structure");
        return true;
        }
    else{
        alert(alertMessage);
        password.focus();
        return false;
        }
}; 
