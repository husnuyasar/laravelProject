@extends('masters.index.fixed')

@section('content')
<style>
	#map-canvas{
		width: 500px;
		height: 500px;
	}
</style>
<div class="portlet light bordered">
    <form role="form" action="{{ route('dashboard::edit') }}" method="POST">
    {{ csrf_field() }}
        <div class="col-md-6">
                <div class="caption caption-md">
                    <i class="icon-globe theme-font hide"></i>
                    <span class="caption-subject font-blue-madison bold uppercase">İl Ekleme</span>
                </div>
            <div class="form-group">
                <label class="control-label bold">Map</label>
                <input type="text" id="searchmap" class="control-control">
                <div id="map-canvas"></div>
            </div>
        </div>
        <input type="hidden" name="city_id" id="city_id" value="{{ $detail->id }}"> 
        <div class="col-md-6">
            @include('components.common.textinput',[
                'componentlabel'=>'Title',
                'componentname'=>'title',
                'componentid'=>'title',
                'componentplaceholder'=>'',
                'componentvalue'=>$locationDetail->title,
            ])
            @include('components.common.textinput',[
                'componentlabel'=>'Lat',
                'componentname'=>'lat',
                'componentid'=>'lat',
                'componentplaceholder'=>'',
                'componentvalue'=>$detail->lat,
            ])
            @include('components.common.textinput',[
                'componentlabel'=>'Lng',
                'componentname'=>'lng',
                'componentid'=>'lng',
                'componentplaceholder'=>'',
                'componentvalue'=>$detail->lng,
            ])
            @include('components.common.textinput',[
                'componentlabel'=>'City',
                'componentname'=>'city',
                'componentid'=>'city',
                'componentplaceholder'=>'',
                'componentvalue'=>$detail->city_name,
            ])
            @include('components.common.textinput',[
                'componentlabel'=>'Province',
                'componentname'=>'province',
                'componentid'=>'province',
                'componentplaceholder'=>'',
                'componentvalue'=>$detail->province_name,
            ])
            <div class="form-group">
                <label class="control-label">Address</label>
                <div class="inbox-form-group margin-top-10{{ $errors->has('address') ? ' has-error' : '' }}">
                    <span style="color:red">{{ $errors->has('address') ? '** Adres içeriği boş!' : '' }}</span>
                    <textarea name="address" class="form-control spinners" id="" cols="105" rows="10">{{$locationDetail->address}}</textarea>
                </div>
            </div>
        </div>
        
        <div class="margiv-top-10">
            <button class="btn green"> Kaydet </button>
            <a href="{{ route('dashboard::index') }}" class="btn default"> İptal </a>
        </div>
    </form>
	
</div>
    
@endsection

@section('extrarunnablejavascript')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
  type="text/javascript"></script>
<script type="text/javascript">
   	var map = new google.maps.Map(document.getElementById('map-canvas'),{
		center:{
			lat: {{ $detail->lat}},
        	lng: {{ $detail->lng}}
		},
		zoom:15
	});
	var marker = new google.maps.Marker({
		position: {
			lat: {{ $detail->lat}},
        	lng: {{ $detail->lng}}
		},
		map: map,
		draggable: true
	});
	var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
	google.maps.event.addListener(searchBox,'places_changed',function(){
		var places = searchBox.getPlaces();
		var bounds = new google.maps.LatLngBounds();
		var i, place;
		for(i=0; place=places[i];i++){
  			bounds.extend(place.geometry.location);
  			marker.setPosition(place.geometry.location); 
  		}
  		map.fitBounds(bounds);
  		map.setZoom(15);
	});
	google.maps.event.addListener(marker,'position_changed',function(){
		var lat = marker.getPosition().lat();
		var lng = marker.getPosition().lng();
		$('#lat').val(lat);
		$('#lng').val(lng);

        var latlng;
        latlng = new google.maps.LatLng(lat, lng);
        new google.maps.Geocoder().geocode({'latLng' : latlng}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            if (results[1]) {
                    var country = null, countryCode = null, city = null, cityAlt = null;
                    var c, lc, component;
                    for (var r = 0, rl = results.length; r < rl; r += 1) {
                        var result = results[r];

                        if (!city && result.types[0] === 'locality') {
                            for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                                component = result.address_components[c];

                                if (component.types[0] === 'locality') {
                                    city = component.long_name;
                                    break;
                                }
                            }
                        }
                        else if (!city && !cityAlt && result.types[0] === 'administrative_area_level_1') {
                            for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                                component = result.address_components[c];

                                if (component.types[0] === 'administrative_area_level_2' || component.types[0] === 'administrative_area_level_4') {
                                    cityAlt = component.long_name;
                                    //alert(cityAlt);
                                    break;
                                }
                            }
                        } 
                        
                        else if (!country && result.types[0] === 'country') {
                            country = result.address_components[0].long_name;
                            countryCode = result.address_components[0].short_name;
                        }

                        if (city && country) {
                            break;
                        }
                    }
                    
                    //console.log("City: " + city + ", City2: " + cityAlt + ", Country: " + country + ", Country Code: " + countryCode);
                }
                $('#city').val(city);
                $('#province').val(cityAlt);
            }
        });
        
	});

</script>
@endsection
