function hideShowDiv(){
  for (let i = 1; i < 22; i++){
    if(document.getElementById("date" + i).checked == true){
      document.getElementById("div" + i).style.display = 'block'; 
    }else{
      document.getElementById("div" + i).style.display = 'none';
    }
  }
}
