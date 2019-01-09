// Youtube Video Iframe Stop Playing on Bootstrap modal closed
$("#videoModal").on('hidden.bs.modal', function (e) {
    $("#videoModal iframe").attr("src", $("#videoModal iframe").attr("src"));
});