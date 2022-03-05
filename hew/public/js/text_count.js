document.getElementById("input_theme").addEventListener("keyup",(e)=>{
  const len = e.target.value.length ;
  document.getElementById("strLen").innerText = len ;
})