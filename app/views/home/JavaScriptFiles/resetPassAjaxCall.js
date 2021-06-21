const form = {
    email: document.getElementById("email"),
    message: document.getElementById("error-message"),
    submit: document.getElementById("btn"),
};
const formular = document.getElementById("myForm1");

function handleForm(event) { event.preventDefault(); }
formular.addEventListener('submit', handleForm);


const form_succes = {
    token: document.getElementById("token"),
    newPassword: document.getElementById("newPassword"),
    message: document.getElementById("error-message"),
    submit: document.getElementById("btn2"),
};
const formular2 = document.getElementById("myForm2");

function handleForm(event) { event.preventDefault(); }
formular2.addEventListener('submit', handleForm);


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
            if (response.status) {
                document.getElementById("error-message").innerHTML = response.message;
                form.message.style.color = 'rgb(0, 126, 6)';
                form.message.style.marginBottom = "25px";

            } else {
                document.getElementById("error-message").innerHTML = response.message;
                form.message.style.color = 'rgb(172, 0, 0)';
                form.message.style.marginBottom = "30px";
            }
        }

    }
    const requestData = `email=${form.email.value}`;
    //console.log(requestData);
    ajax.open("POST", '../phpFiles/sendMail.php', true);
    ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax.send(requestData);
});

form_succes.submit.addEventListener('click', () => {
    var ajax2;
    if (window.XMLHttpRequest) {
        ajax2 = new XMLHttpRequest();
    } else {
        ajax2 = new ActiveXObject("Microsoft.XMLHTTP");
    }

    ajax2.onload = () => {
        var response2 = null;
        try {
            response2 = JSON.parse(ajax2.responseText);
        } catch (e) {
            console.error('error at parsing Json');
        }
        if (response2) {
            if (response2.status) {
                document.getElementById("error-message").innerHTML = response2.message;
                form_succes.message.style.color = 'rgba(255, 255, 255, 0)';
                form_succes.message.style.marginBottom = "25px";
                location.href = '/app/views/home/Login.php';
            } else {
                document.getElementById("error-message").innerHTML = response2.message;
                form_succes.message.style.color = 'rgb(172, 0, 0)';
                form_succes.message.style.marginBottom = "30px";
            }
        }

    }
    const requestData2 = `email=${form.email.value}&token=${form_succes.token.value}&newPassword=${form_succes.newPassword.value}`;
    //console.log(requestData2);
    ajax2.open("POST", '../phpFiles/resetPassword.php', true);
    ajax2.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax2.send(requestData2);
});