// $(document).ready(function() {
//     // $('#OstroModal').load('');
// });
// function LoadImage(obj) {
//     alert($(obj).val());
// }

function LoadImageManager(attr) {
    $('#OstroModal').load('/image/list-modal');
    $('#OstroModal').attr('data-input-id', attr);
}

function ChooseImage(name) {
    $('#' + $('#OstroModal').attr('data-input-id')).val(name);
    $('#OstroImgPreview').attr('src', '/web/images/' + name);
    $('#OstroModal').modal('hide');
}