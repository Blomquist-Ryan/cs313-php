function changePicture(){
     var pic = 0;
     switch(pic){
         case 1:
            document.getElementById("me").src="me.JPG";
            pic++;
            break;
         case 2:
            document.getElementById("me").src="modeling1.JPG";
            pic++;
            break;
        case 3:
            document.getElementById("me").src="modeling2.JPG";
            pic++;
            break;
        case 4:
            document.getElementById("me").src="modeling3.JPG";
            pic = 0;
            break;

     }
    
}