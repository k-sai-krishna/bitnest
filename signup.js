function passwordValidate(){
    let p = document.getElementById('pass').value;
    let cp = document.getElementById('c_pass').value;
    if (p != cp){
        document.getElementById('wrong_p').innerHTML = 'Password doesn\'t match';
        document.getElementById('create').disabled = true;

    }
    else{
        document.getElementById('wrong_p').innerHTML='Password Matches';
        document.getElementById('create').disabled = false;
    }
}
function randtext(){
    let arr = ['1','2','3','4','5','6','7','8','9','0','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']
    // write program to generate a 6 letter random text from above chars and then display it to #captcha
    captcha = '';
    for( let i=0; i<6; i++){
        rand = Math.floor(Math.random() * arr.length);
        captcha = captcha + arr[rand];
    }
    document.getElementById('cap').value = captcha;
}
function captchaValidate(){
    let c = document.getElementById('cap').value;
    let cc = document.getElementById('c_cap').value;
    if (c != cc){
        document.getElementById('wrong_c').innerHTML = 'Captcha doesn\'t match';
        document.getElementById('create').disabled = true;

    }
    else{
        document.getElementById('wrong_c').innerHTML='Captcha Matches';
        document.getElementById('create').disabled = false;
    }
}
