let images = document.getElementsByClassName("image");
images.forEach((image) => {
  console.log(images);
  image.addEventListener("click", selectImage());
});

function selectImage() {
  console.log(this);
}
