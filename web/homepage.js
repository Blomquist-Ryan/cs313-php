function changePicture(pic){
     
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
            pic = 1;
            break;

     }
    
}