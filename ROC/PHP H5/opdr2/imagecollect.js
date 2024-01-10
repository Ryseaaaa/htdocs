function selectImage(path) {
  
  //get html element
  var thisImage = document.getElementById(path);
  
  if (thisImage.classList.contains("imageUnselected")){
    thisImage.setAttribute("value",path);
    thisImage.classList.replace("imageUnselected","imageSelected");
  }else{
    thisImage.setAttribute("value","");
    thisImage.classList.replace("imageSelected","imageUnselected");
  }
  
}
