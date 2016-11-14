$(window).ready(function(e){
        initialize();
});
function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng(48.6971623, 1.8825143000000253), 
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('js-map-container'), mapOptions);
        map.setZoom(15);
}


$(window).ready(function(e) {



$.getJSON('mapproperties.php',function(data){
        if(data.success == true) {
            if(data.data.length > 0){
                $.each(data.data,function(index, value){
                    var i =0;
                    lat = data.data[index].lat;
                    console.log(lat);
                    lng = data.data[index].lng;
                    firstname = data.data[index].firstname;
                    lastname = data.data[index].lastname;
                    // price = data.data[index].price;
                    addMarker(i, lat, lng, firstname, lastname);
                    i++;
                });
            }
        }
    });




function addMarker(i, lat, lng, firstname, lastname) {
    if (lat != null && lng != null) {
        var markersArray = [];
        myLatLng = new google.maps.LatLng(lat, lng);
        bounds = new google.maps.LatLngBounds();
        var img = 'img/pencil-case.png';
        // var imageUrl = base_url+ 'marker.png';
        // var markerImage = new google.maps.MarkerImage(imageUrl);
        eval('var marker' + i + ' = new google.maps.Marker({ position: myLatLng,  map: map, icon: img,animation: google.maps.Animation.DROP, zIndex: i});');
        var marker_obj = eval('marker' + i);
        bounds.extend(marker_obj.position);
        markersArray.push(eval('marker' + i));
        marker_obj.title = name;
        var li_obj = '.js-map-num' + i;
        image = '';
        // if(img != ''){
        //    image = '<img src="'+base_url+'images/'+img+'" class="img-responsive img-thumbnail" />';
        // }
        var content = '<div class=""><h4>' + firstname + '</h4><h4><span class="label label-danger"> $</span></h4></div>';
        eval('var infowindow' + i + ' = new google.maps.InfoWindow({ content: content,  maxWidth: 370});');
        var infowindow_obj = eval('infowindow' + i);
        var marker_obj = eval('marker' + i);
        google.maps.event.addListener(marker_obj, 'click', function () {
            infowindow_obj.open(map, marker_obj);
        });
    }
}



});