$(function(){

  var now = new Date();
  var strDate = now.getFullYear() + "-" + updateTime(now.getMonth()+1) + "-" + updateTime(now.getDate());
  $("#date").attr("min", strDate);

  $("#date").on("input", function(event){
    var day = new Date($(event.target).val()).getUTCDay();
    if([6,0].includes(day)){
      event.preventDefault();
      $(event.target).val('');
      alert('Weekends not allowed');
    }
  });

  $("#selectModel").on("change", function(event){
    var plane = $(event.target).val();

    var planes = {
      "Airbus A380": 35000,
      "Boeing 747": 38000
    };

    var maxWeight = planes[plane];

    $("input[name^=cargoWeight]")
      .attr("max", maxWeight);
  });

});
