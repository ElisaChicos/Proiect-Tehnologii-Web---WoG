var getTxt = document.getElementById("group2");
var content = document.getElementById("content");
var xhr1  = new XMLHttpRequest();

console.log("aici");
getTxt.addEventListener("click",function(){

    xhr1.addEventListener('readystatechange',function(){
        content.innerHTML = this.responseText;

    });
    xhr1.open("GET","../phpFiles/VerifGenerator.php",true);
    xhr1.send();

}); 
