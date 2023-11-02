<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('comming soon...') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="  shadow-md sm:rounded-lg">
                    {{-- overflow-x-auto --}}
                    
                    <div class="h-96" id="map">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
    //         var map = L.map('map').setView([51.505, -0.09], 13);
    //         L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);

 

    //         var drawnItems = new L.FeatureGroup();
    //         map.addLayer(drawnItems);
    //         // var drawControl = new L.Control.Draw({edit: {featureGroup: drawnItems}});
    //         var drawControl = new L.Control.Draw({
    //      draw: {
    
    //      },
    //      edit: {
    //          featureGroup: drawnItems,
    //          edit: false
    //      }
    //  });
    //         map.addControl(drawControl);

    type='true';
        var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
        osm = L.tileLayer(osmUrl, { maxZoom: 18});
        map = new L.Map('map', { center: new L.LatLng(51.505, -0.04), zoom: 13 });
        drawnItems = L.featureGroup().addTo(map);
        osm.addTo(map);
        map.addControl(new L.Control.Draw({
            edit: {
                featureGroup: drawnItems,
                poly: {
                    allowIntersection: false
                }
            },
            draw: {
                circle: false,
                marker: false,
                circlemarker:false,
                polyline:false,
                polygon: {
                    allowIntersection: false,
                    showArea: true,
                    metric: 'metric'
                },
                rectangle:{ metric: 'metric'},
            }
        }));

    map.on(L.Draw.Event.CREATED, function (event) {
        var layer = event.layer;

        drawnItems.addLayer(layer);
    });


            
            
            
            
     


            }, false);


            
        
    </script>
</x-app-layout>
