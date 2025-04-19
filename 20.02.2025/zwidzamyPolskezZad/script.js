let currentPhoto = document.getElementById("photo1");
let currentIndex = currentPhoto.src.substring(currentPhoto.src.length - 5, currentPhoto.src.length -4);

function updatePhotoPlus(){
    currentIndex++;
    if(currentIndex == 7){
        currentIndex = 1;
    }
    currentPhoto.src = currentIndex + ".jpg";
}
function updatePhotoMinus(){
    currentIndex--;
    if(currentIndex == 1){
        currentIndex = 7;
    }
    currentPhoto.src = currentIndex + ".jpg";
}

