const form = {
    username: document.getElementById("username"),
    height: document.getElementById("height"),
    weight: document.getElementById("weight"),
    currentPassword: document.getElementById("currentPassword"),
    newPassword: document.getElementById("newPassword"),
    message: document.getElementById("error-message"),
    submit: document.getElementById("btn"),
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
    const requestData = `username=${form.username.value}&height=${form.height.value}&weight=${form.weight.value}
    &currentPassword=${form.currentPassword.value}&newPassword=${form.newPassword.value}`;
    console.log(requestData);
    ajax.open("POST", '../phpFiles/editProfile.php', true);
    ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax.send(requestData);
});

function getAndHandleResponse(response) {

    if (response.status) {
        document.getElementById("error-message").innerHTML = response.message;
        form.message.style.color = 'rgba(255, 255, 255, 0)';
        form.message.style.marginBottom = "25px";
        location.href = '/app/views/home/Profil.php';
    } else {
        document.getElementById("error-message").innerHTML = response.message;
        form.message.style.color = 'rgb(172, 0, 0)';
        form.message.style.marginBottom = "30px";
    }
}