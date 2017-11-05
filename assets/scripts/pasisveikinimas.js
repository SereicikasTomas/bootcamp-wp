var today = new Date()
var curHr = today.getHours()

if (curHr < 12 && curHr > 5) {
  document.getElementById("pasisveikinimas").innerHTML = "Labas rytas! Kaip šiandien laikotės?"
} else if (curHr < 18 && curHr > 12) {
  document.getElementById("pasisveikinimas").innerHTML = "Laba diena! Kaip šiandien laikotės?"
} else if (curHr < 23 && curHr > 5){
  document.getElementById("pasisveikinimas").innerHTML = "Labas vakaras! Kaip šiandien laikotės?"
} else {
  document.getElementById("pasisveikinimas").innerHTML = "Saldžių sapnų."
}
