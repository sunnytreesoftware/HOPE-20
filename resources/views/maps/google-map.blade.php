@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="map"></div>
                <script type="application/javascript" src="{{ asset('js/map.js') }}">
                    /*var map;
                    function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: {lat: 41.1537, lng: -81.3579},
                            zoom: 8
                        });
                    }*/
                </script>
                <script type="application/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap"
                        async defer></script>


            </div>
            <div class="col-md-4">
                <h4>Map Layers</h4>
                <form class="form-control-lg">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="population">
                            <label class="form-check-label" for="gridCheck">
                               Population Density
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Total Cases
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Test Positivity Rate
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Wastewater Treatment Plants
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                </form>



                <script type="text/javascript">

                    var population = document.getElementById('population');

                    population.onclick = function(){

                        var script = document.createElement("script");
                        script.type = "text/javascript";
                        script.src = "Public/Scripts/filename.js.";
                        document.getElementsByTagName("head")[0].appendChild(script);
                        return false;

                    }


                </script>

                </div>



            </div>
        </div>
    </div>
@endsection

