@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div id="map"></div>
            <div id="capture"></div>
            <script>
              /*  var map;
                var src = '{{ asset('data/Wastewater_Treatment_Plants.kml') }}';
*/
                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 11,
                        center: {lat: 41.876, lng: -87.624}
                    });

                    var ctaLayer = new google.maps.KmlLayer({
                        url: 'https://opendata.arcgis.com/datasets/4b9bac25263047c19e617d7bd7b30701_0.geojson',
                        map: map
                    });

                }
            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
            </script>
        </div>
    </div>
@endsection

