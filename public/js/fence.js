 function redeemOffer() {

        var startPos;
        var startPosLat;
        var startPosLong;
        var distance;
       
       if (navigator.geolocation) {
		      startPosLat = parseFloat(document.getElementById("latitude").value);
          startPosLong = parseFloat(document.getElementById("longititude").value);
         // navigator.geolocation.watchPosition(function(position) {
            navigator.geolocation.getCurrentPosition(function(position) {
            distance = calculateDistance(startPosLat, startPosLong,position.coords.latitude, position.coords.longitude);
            alert(distance);
            if(distance < 100.00){
              window.location.replace("/confirm-redeemed");
            }else if(distance > 100.00){
              swal( "Ooops", "You are not in the offer zone.Please try again", "error");
            }
          });
        }
      };
      
      // Reused code - copyright Moveable Type Scripts - retrieved May 4, 2010.
      // http://www.movable-type.co.uk/scripts/latlong.html
      // Under Creative Commons License http://creativecommons.org/licenses/by/3.0/
      function calculateDistance(lat1, lon1, lat2, lon2) {
        //var R = 6371; // km
        //Radius of the earth in:  1.609344 miles,  6371 km  | var R = (6371 / 1.609344);
        var R = 63710; // cm
        var dLat = (lat2-lat1).toRad();
        var dLon = (lon2-lon1).toRad();
        var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
                Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) *
                Math.sin(dLon/2) * Math.sin(dLon/2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
        var d = R * c;
        return d;
      }

      Number.prototype.toRad = function() {
        return this * Math.PI / 180;
      }
