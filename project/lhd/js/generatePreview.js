function thumb(files) {

    if (files == null || files == undefined) {
        <span id="IL_AD1" class="IL_AD">document</span>.write("This Browser has no support for HTML5 FileReader yet!");
        return false;
    }

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var imageType = /image.*/;

        if (!file.type.match(imageType)) {
            continue;

        }

        var reader = new FileReader();

        if (reader != null) {

            reader.onload = GetThumbnail;
            reader.readAsDataURL(file);
        }


    }
}

function GetThumbnail(e) {
    var myCan = document.createElement('canvas');
    var img = new Image();
    img.src = e.target.result;
    img.onload = function() {

        myCan.id = "myTempCanvas";
        var tsize = document.getElementById("txtThumbSize").value;
        myCan.width = Number(tsize);
        myCan.height = Number(tsize);
        if (myCan.getContext) {
            var cntxt = myCan.getContext("2d");
            cntxt.drawImage(img, 0, 0, myCan.width, myCan.height);
            var dataURL = myCan.toDataURL();


            if (dataURL != null && dataURL != undefined) {
                var nImg = document.createElement('img');
                nImg.src = dataURL;
                document.body.appendChild(nImg);

            }
            else
                alert('unable to get context');

        }

    }

}
