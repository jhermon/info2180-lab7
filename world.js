window.onload = function(){
    let start_http = new XMLHttpRequest();
    let request = document.getElementById("country").value;
    start_http.onreadystatechange = _result();
    
    _result = ()=>{
    if (this.readyState == 4 && this.status == 200){
        let result = document.getElementById("result");
        result.innerHTML = this.responseText;
        alert(result.innerHTML=this.responseText);
        
        }
    };
    
    http.open("GET",address,true);
    http.send("");
    

};