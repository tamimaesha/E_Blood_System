function validateForm(){

	var academic_title = document.getElementById('academic_title').value;
	var	academic_description = document.getElementById('academic_description').value;
	var	SelectedFileName = document.getElementById('SelectedFileName').value;
		
	// alert(news_title);
	// alert(news_description);
	// alert(fileToUpload);
	
	if( academic_title == "" )
   {
     document.form.academic_title.focus() ;
	 document.getElementById("errorBox").innerHTML = "Please Enter your Academic Title";
     return false;
   }else if(isNaN(academic_title) == false){
	  document.form.academic_title.focus() ;
      document.getElementById("errorBox").innerHTML = "Please Enter Only Character";
     return false;
   }
   
	if( academic_description == "" )
   {
      document.form.academic_description.focus() ;
	  document.getElementById("errorBox").innerHTML = "Please Enter your Academic Description";
     return false;
   }else if(isNaN(academic_description) == false){
	  document.form.fileToUpload.focus() ;
      document.getElementById("errorBox").innerHTML = "Please Enter Only Character";
     return false;
   }
   if( SelectedFileName == "" )
   {
     document.form.SelectedFileName.focus() ;
	 document.getElementById("errorBox").innerHTML = "Please Select a File";
     return false;
   }
 
		if(academic_title != '' && academic_description != '' && SelectedFileName != ''){
			return true;
			}
		  
}

document.getElementById('fileToUpload').addEventListener('change', checkFile, false);

function checkFile(e) {

    var file_list = e.target.files;

    for (var i = 0, file; file = file_list[i]; i++) {
        var sFileName = file.name;
        var sFileExtension = sFileName.split('.')[sFileName.split('.').length - 1].toLowerCase();
        var iFileSize = file.size;
        var iConvert = (file.size / 10485760).toFixed(2);

        if (!(sFileExtension === "png" || sFileExtension === "jpeg" || sFileExtension === "jpg" ||  sFileExtension === "gif" || sFileExtension === "bmp")) {
         //   txt = "File type : " + sFileExtension + "\n\n";
          //  txt += "Size: " + iConvert + " MB \n\n";
            txt = "File Extention Not allowed";
            document.getElementById("errorBox").innerHTML = txt;
			document.getElementById('SelectedFileName').value = "";
			return false;
		} else if (iFileSize > 10485760){
		
			txt = "File size must be less than 10 MB.\n\n";
            document.getElementById("errorBox").innerHTML = txt;
			document.getElementById('SelectedFileName').value = "";
		    return false;
		}
    }
}
