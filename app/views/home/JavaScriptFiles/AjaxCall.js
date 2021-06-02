window.onload=function(){
    var getTxt = document.getElementById("getTxt");
    var content = document.getElementById("content");
    var xhr =  new XMLHttpRequest();

    getTxt.addEventListener("click",function(){

        xhr.addEventListener('readystatechange',function(){
            content.innerHTML = this.responseText;
            
        });
        
        xhr.open("GET","http://localhost:3000/app/views/home/hello.txt",true);
        xhr.send();
    });

    
};