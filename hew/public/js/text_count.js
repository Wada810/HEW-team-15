document.getElementById("input_theme").addEventListener("keyup",(e)=>{
  const len = e.target.value.length ;
  document.getElementById("strLen").innerText = len;
  if(len > 15){
    document.getElementById("input_theme").setAttribute("rows",2);
  }else{
    document.getElementById("input_theme").setAttribute("rows",1);
  }
})