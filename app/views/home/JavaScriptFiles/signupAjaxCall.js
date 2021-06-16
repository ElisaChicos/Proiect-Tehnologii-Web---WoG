const form = {
    username: document.getElementById("username"),
    email: document.getElementById("email"),
    age: document.getElementById("age"),
    height: document.getElementById("height"),
    weight: document.getElementById("weight"),
    gender: document.getElementById("gender"),
    password: document.getElementById("password"),
    message: document.getElementById("error-message"),
    submit: document.getElementById("create"),
};
const formular = document.getElementById("myForm");

function handleForm(event) { event.preventDefault(); }
formular.addEventListener('submit', handleForm);
form.submit.addEventListener('click', () => {
    var ajax;
    if (window.XMLHttpRequest) {
        ajax = new XMLHttpRequest();
    } else {
        ajax = new ActiveXObject("Microsoft.XMLHTTP");
    }

    ajax.onload = () => {
        var response = null;
        try {
            response = JSON.parse(ajax.responseText);
        } catch (e) {
            console.error('error at parsing Json');
        }

        if (response) {
            getAndHandleResponse(response);
        }

    }
    const requestData = `username=${form.username.value}&email=${form.email.value}&age=${form.age.value}&height=${form.height.value}
    &weight=${form.weight.value}&gender=${form.gender.value}&password=${form.password.value}`;
    console.log(requestData);
    ajax.open("POST", '../phpFiles/config_create_account.php', true);
    ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax.send(requestData);
});

function getAndHandleResponse(response) {

    if (response.status) {
        document.getElementById("error-message").innerHTML = response.message;
        form.message.style.color = 'rgba(255, 255, 255, 0)';
        form.message.style.marginBottom = "25px";
        location.href = '/app/views/home/Login.php';
    } else {
        document.getElementById("error-message").innerHTML = response.message;
        form.message.style.color = 'white';
        form.message.style.marginBottom = "30px";
    }
}