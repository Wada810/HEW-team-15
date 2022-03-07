document.getElementById("name").addEventListener("keyup",(e)=>{
    const len = e.target.value.length ;
    document.getElementById("nameLen").innerText = len;
    if(len > 15){
      document.getElementById("name").setAttribute("rows",2);
    }else{
      document.getElementById("name").setAttribute("rows",1);
    }
  })

document.getElementById("pass").addEventListener("keyup",(e)=>{
    const len = e.target.value.length ;
    document.getElementById("passLen").innerText = len;
    if(len > 15){
      document.getElementById("pass").setAttribute("rows",2);
    }else{
      document.getElementById("pass").setAttribute("rows",1);
    }
  })
