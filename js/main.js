$(document).ready(function(){
  $("#downloadSpreadsheet").submit(function() {
    console.log('we are in download spreadsheet')

    var fields = $('#fields')

    console.log(fields)

    // $.ajax({
    //   url: '../spreadsheet/download.php',
    //   type: 'POST',
    //   data: data,
    //   success: function (result) {
    //       alert('success');
    //   }
    // });
  });
});
