
var getTxt = document.getElementById("getTxt");
var content = document.getElementById("content");

var xhr1  = new XMLHttpRequest();
var xhr2  = new XMLHttpRequest();
var xhr3  = new XMLHttpRequest();




getTxt.addEventListener("click",function(){

    xhr1.addEventListener('readystatechange',function(){
            content.innerHTML = this.responseText;
            var getTxt1 = document.getElementById("getTxt1");
         getTxt1.addEventListener("click",function(){
            xhr2.addEventListener('readystatechange',function(){
                content.innerHTML = this.responseText;
                var getTxt2 = document.getElementById("getTxt2");
                getTxt2.addEventListener("click",function(){
                    xhr3.addEventListener('readystatechange',function(){
                        content.innerHTML = this.responseText;
                    });
                xhr3.open("GET","../phpFiles/Exercises/FinalWorkout.php",true);
                xhr3.send();  
                });            
        });
    xhr2.open("GET","../phpFiles/Exercises/exercise2.php",true);
    xhr2.send(); 
});  
    });
    xhr1.open("GET","../phpFiles/Exercises/exercise1.php",true);
    xhr1.send();

});  
