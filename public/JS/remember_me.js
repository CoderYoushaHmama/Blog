var remember_me = document.getElementById('remember_me');
var email = document.getElementById('email');
var password = document.getElementById('password');

function remember(){
    if(remember_me.hasAttribute("checked") && email.value && password.value){
        localStorage.setItem('email',email.value);
        localStorage.setItem('password',password.value);
        alert('true')
    }else{
        if(!remember_me.hasAttribute('checked') && localStorage.getItem('email') && localStorage.getItem('password')){
            localStorage.clear('email');
            localStorage.clear('password');
            alert('false')
        }
        alert(remember_me.getAttribute('checked'))
    }
}

if(localStorage.getItem('email') && localStorage.getItem('password')){
    remember_me.setAttribute('checked');
    email.setAttribute('value',localStorage.getItem('email'));
    password.setAttribute('value',localStorage.getItem('password'));
}else{
    remember_me.removeAttribute('checked');
}