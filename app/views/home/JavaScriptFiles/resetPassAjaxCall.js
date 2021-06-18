const form = {
    email: document.getElementById("email"),
    message: document.getElementById("error-message"),
    submit: document.getElementById("btn"),
};
const formular = document.getElementById("myForm1");

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
    const requestData = `email=${form.email.value}`;
    console.log(requestData);
    ajax.open("POST", '../phpFiles/sendMail.php', true);
    ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax.send(requestData);
});

function getAndHandleResponse(response) {

    if (response.status) {
        document.getElementById("error-message").innerHTML = response.message;
        form.message.style.color = 'rgb(0, 126, 6)';
        form.message.style.marginBottom = "25px";

        const form_succes = {
            token: document.getElementById("token"),
            newPassword: document.getElementById("newPassword"),
            confirmPassword: document.getElementById("confirmPassword"),
            message: document.getElementById("error-message"),
            submit: document.getElementById("btn2"),
        };
        const formular2 = document.getElementById("myForm2");

        function handleForm(event) { event.preventDefault(); }
        formular2.addEventListener('submit', handleForm);
        form_succes.submit.addEventListener('click', () => {
            var ajax2;
            if (window.XMLHttpRequest) {
                ajax2 = new XMLHttpRequest();
            } else {
                ajax2 = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax2.onload = () => {
                var response = null;
                try {
                    response = JSON.parse(ajax2.responseText);
                } catch (e) {
                    console.error('error at parsing Json');
                }
                if (response) {
                    getAndHandleResponseSucces(response);
                }

            }
            const requestData = `token=${form_succes.token.value}&newPassword=${form_succes.newPassword.value}
            &confirmPassword=${form_succes.confirmPassword.value}`;
            console.log(requestData);
            ajax2.open("POST", '../phpFiles/resetPassword.php', true);
            ajax2.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            ajax2.send(requestData);
        });

        function getAndHandleResponseSucces(response) {

            if (response.status) {
                document.getElementById("error-message").innerHTML = response.message;
                form_succes.message.style.color = 'rgba(255, 255, 255, 0)';
                form_succes.message.style.marginBottom = "25px";
                location.href = '/app/views/home/Login.php';
            } else {
                document.getElementById("error-message").innerHTML = response.message;
                form_succes.message.style.color = 'rgb(172, 0, 0)';
                form_succes.message.style.marginBottom = "30px";
            }
        }

    } else {
        document.getElementById("error-message").innerHTML = response.message;
        form.message.style.color = 'rgb(172, 0, 0)';
        form.message.style.marginBottom = "30px";
    }
}