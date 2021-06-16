const form = {
    email: document.getElementById("email"),
    password: document.getElementById("password"),
    submit: document.getElementById("btn"),
    message: document.getElementById("error-message")
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
    const requestData = `email=${form.email.value}&password=${form.password.value}`;
    console.log(requestData);
    ajax.open("POST", '../phpFiles/loginIntoAccount.php', true);
    ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax.send(requestData);
});

function getAndHandleResponse(response) {

    if (response.status) {
        document.getElementById("error-message").innerHTML = response.message;
        form.message.style.marginBottom = "25px";
        location.href = '/app/views/home/Profil.php';
    } else {
        document.getElementById("error-message").innerHTML = response.message;
        form.message.style.color = 'white';
        form.message.style.marginBottom = "30px";
    }
}