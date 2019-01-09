
// Youtube Video Iframe Stop Playing on Bootstrap modal closed
$("#videoModal").on('hidden.bs.modal', function (e) {

    $("#videoModal iframe").attr("src", $("#videoModal iframe").attr("src"));
});



// Audio Player Stop Playing on Bootstrap modal closed
// NB: You can use this same code for HTML video Player also
$('#myModal').on('hide.bs.modal', function () { //Change #myModal with your modal id
      $('audio').each(function(){
        this.pause(); // Stop playing
        this.currentTime = 0; // Reset time
      }); 
})
// This Script for HTML audio and video palyer



// You have to go with dynamic modal selector for use it in dynamic content