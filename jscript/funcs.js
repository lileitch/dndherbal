var ratingamount = 0;
const upperBound = 5;
const lowerBound = 0;
const hR = new XMLHttpRequest();
function startGetHTMLContent(animal) { 
   let url = "./loadhtml.php?posn=" + animal; 
   hR.onreadystatechange = loadHTMLContent; 
   hR.open('GET', url); 
   hR.send();
}
function loadHTMLContent() {
   if (hR.readyState === XMLHttpRequest.DONE) { 
   if (hR.status === 200) { 
         let response = hR.responseText; 
         // var outputelem = document.getElementById('outval'); 
         // outputelem.innerHTML = response;
         $('#outval').hide().html(response).show(7000);
   } 
   else { 
         alert('There was a problem with the request.'); 
     } 
   }
}
function switchimg(ide, strimg) {
   var objImg = document.getElementById(ide);
   objImg.src = ("./images/" + strimg);
}
function addrating(num) {
   // add num amount to the global rating amount
   ratingamount += num;
   // if new rating is more than upperBound then set to upperBound
   ratingamount = (ratingamount > upperBound ? upperBound : ratingamount);
   console.log(ratingamount);
   // document.getElementById('rating').innerHTML = " - " + ratingamount;
   var rateDiv = document.getElementById('rating');
   // print a start ratingamount of times inside of rateDiv
   var str = "";
   for (var i = 1; i <= ratingamount; i += 1) {
      str += (`<img src="./images/star-50.png" />`);
   }
   rateDiv.innerHTML = str;
}
function remrating(num) {
   // add num amount to the global rating amount
   ratingamount -= num;
   // if new rating is more than upperBound then set to upperBound
   ratingamount = (ratingamount < lowerBound ? lowerBound : ratingamount);
   console.log(ratingamount);
   // document.getElementById('rating').innerHTML = " - " + ratingamount;
   var rateDiv = document.getElementById('rating');
   // print a start ratingamount of times inside of rateDiv
   var str = "";
   for (var i = 1; i <= ratingamount; i += 1) {
      str += (`<img src="./images/star-50.png" />`);
   }
   rateDiv.innerHTML = str;
}