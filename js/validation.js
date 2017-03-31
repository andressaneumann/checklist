
function validateForm() {
    var name = document.main.videoTitle.value;
    var url = document.main.videoUrl.value;
    
    if(name == null || name == ""){
    	alert("Video name can't be blank!");
    	return false;
    } else if (url == null || url == ""){
    	alert("Video URL can't be blank!");
    	return false;
    }

}