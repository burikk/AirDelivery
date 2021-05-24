function currentTime() {
  var date = new Date();
  var day = date.getDate();
  var month = date.getMonth()+1;
  var year = date.getFullYear();
  var weekday = date.getDay()
  var hour = date.getHours();
  var min = date.getMinutes();
  var sec = date.getSeconds();

  day = updateTime(day);
  month = updateTime(month);
  hour = updateTime(hour);
  min = updateTime(min);
  sec = updateTime(sec);
  weekday = getWeekDay(date);
  document.getElementById("clock").innerHTML = day+"."+month+"."+year+" | "+hour+":"+min+":"+sec+" | "+weekday;
    var t = setTimeout(function(){ currentTime() }, 1000);
}

function getWeekDay(date) {
  let days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

  return days[date.getDay()];
}

function updateTime(k) {
  if (k < 10) {
    return "0" + k;
  }
  else {
    return k;
  }
}

currentTime();