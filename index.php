<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="app2.css">
    <title>Document</title>
</head>
<body>
<form action="register.php" method="post" accept-charset="utf-8">


    <div class="form-group"><input type="text" class="form-control" name="firstname" value="" placeholder="Prénom"></div>
    <div class="form-group"><input type="text" class="form-control" name="lastname" value="" placeholder="nom"></div>
    <div class="form-group"><input type="email" class="form-control" name="email" value="" placeholder="Email"></div>
    <div class="form-group"><input type="text" id="autocomplete"  onFocus="geolocate()" class="form-control" name="" value="" placeholder="Adresse"></div>
    <input type="hidden" name="streetNumber" id="street_number"  value="">
    <input type="hidden" name="address" id="route"  value="">
    <input type="hidden" name="city" id="locality"  value="">
    <input type="hidden" name="zip" id="postal_code"  value="">
    <input type="hidden" name="lat" id="lat"  value="">
    <input type="hidden" name="lng" id="lng"  value="">

    <button type="submit" class="btn btn-success">Inscription</button>
 </form>   
    <a href="map.html"><button class="btn btn-primary" type="">Afficher la map</button></a>

    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVvV3H3-rcwoX6X-Jq1PXMOhiF-6EyO-E&libraries=places"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVvV3H3-rcwoX6X-Jq1PXMOhiF-6EyO-E&signed_in=true&libraries=places&callback=initAutocomplete"
        async defer></script>
    <script type="text/javascript" src="script2.js"></script>
</body>
</html>