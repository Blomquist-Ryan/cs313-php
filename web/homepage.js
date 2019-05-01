var pic = 1;
function changePicture(){
     
     switch(pic){
         case 1:
            document.getElementById("me").src="me.JPG";
            pic++;
            break;
         case 2:
            document.getElementById("me").src="modeling1.jpg";
            pic++;
            break;
        case 3:
            document.getElementById("me").src="modeling2.jpg";
            pic++;
            break;
        case 4:
            document.getElementById("me").src="modeling3.jpg";
            pic = 1;
            break;

     }
    
}