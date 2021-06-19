const form = {
    group1val: document.getElementById("group1"),
    group2val: document.getElementById("group2"),
    group3val: document.getElementById("group3"),
    group4val: document.getElementById("group4"),
    timeval: document.getElementById("time"),
    locationval: document.getElementById("location"),
    message: document.getElementById("error-message"),
    submit: document.getElementById("submit"),
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
    const requestData = `group1val=${form.group1val.value}&group2val=${form.group2val.value}&group3val=${form.group3val.value}&group4val=${form.group4val.value}&timeval=${form.timeval.value}&locationval=${form.locationval.value}`;
    console.log(requestData);
    ajax.open("POST", '../phpFiles/verifDifferent.php', true);
    ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax.send(requestData);
});

function getAndHandleResponse(response) {

    if (response.status) {
        document.getElementById("error-message").innerHTML = response.message;
        form.message.style.color = 'rgba(255, 255, 255, 0)';
        form.message.style.marginBottom = "25px";
        location.href = '/app/views/home/Workout.php';
    } else {
        document.getElementById("error-message").innerHTML = response.message;
        form.message.style.color = 'rgb(172, 0, 0)';
        form.message.style.marginBottom = "30px";
    }
}