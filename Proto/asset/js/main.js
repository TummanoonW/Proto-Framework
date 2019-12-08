function confirmGoto(msg, url) {
    if (confirm(msg)) {
        window.location = url;
    }
}

function uploadToBase64(input_id, width, height) {
    var input = document.querySelector(input_id);
    return new Promise((resolve, reject) => {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var img = document.createElement("img");
                img.src = e.target.result;
                img.onload = function () {
                    var canvas = document.createElement("canvas");
                    canvas.width = width;
                    canvas.height = height;
                    var ctx = canvas.getContext("2d");
                    ctx.fillStyle = "#FFFFFF";
                    ctx.fillRect(0, 0, width, height);
                    ctx.drawImage(img, 0, 0, width, height);
                    var dataurl = canvas.toDataURL('image/jpeg', 0.8);
                    resolve(dataurl);
                }
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            reject(null);
        }
    });
}

function uploadToPicture(input_id, input_id2, img_id, width, height) {
    var input = document.querySelector(input_id);
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            var img = document.createElement("img");
            img.src = e.target.result;
            img.onload = function () {
                var canvas = document.createElement("canvas");
                canvas.width = width;
                canvas.height = height;
                var ctx = canvas.getContext("2d");
                ctx.fillStyle = "#FFFFFF";
                ctx.fillRect(0, 0, width, height);
                ctx.drawImage(img, 0, 0, width, height);
                var dataurl = canvas.toDataURL('image/jpeg', 0.8);
                $(img_id).attr('src', dataurl);
                $(input_id2).val(dataurl);
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function uploadToPictureRaw(input_id, img_id) {
    var input = document.querySelector(input_id);
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(img_id).attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}