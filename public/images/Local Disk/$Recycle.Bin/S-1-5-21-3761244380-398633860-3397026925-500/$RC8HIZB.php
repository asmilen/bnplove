@extends('frontend')

@section('content')
    <div class="map" ng-app="myApp" >
        <div class="filter"  ng-controller="Ctrl">
            <form class="form-inline">
                <select class="form-control tinhthanh" ng-model="selected_province" ng-options="value as value for (key,value) in provinces">
                </select>
                <select class="form-control quanhuyen" ng-model="selected_district" >
                  <option value="Quận/Huyện">Quận/Huyện</option>
                  <option ng-repeat="opt in districts[selected_province]" value="[[opt.name]]">[[opt.name]]</option>
                </select>
                <div class="form-group">
                    <label class="sr-only" for="tenduong">Tên đường</label>
                    <input type="text" class="form-control" id="tenduong" size="30" placeholder="Tên đường(Không bắt buộc)">
                </div>
                <input type="hidden" id="tinhthanh" value="[[selected_province]]">
                <input type="hidden" id="quanhuyen" value="[[selected_district]]">
                <button class="btn-search" id="submit"> &nbsp;</button>
            </form>

        </div>
        <div class="clearfix"></div>

         <div class="map-detail">
            <div style="width: 720px;height: 435px" id="map"><img src="{{url('img/map.png')}}"/></div>
        </div> 
        @if (Auth::guard('frontend')->check())
          <div class="khampha" >
              <a type="button" id="khampha" href="#"><img src="{{url('img/khampha.png')}}"/></a>
          </div>
        @else
          <div class="khampha" >
              <a type="button" id="khampha2" href="#"><img src="{{url('img/khampha.png')}}"/></a>
          </div>
        @endif
        <div class="chiase">
          <a type="button" id="shareBtn" href="#" class="btn btn-dangnhap btn-primary" style="display: none">Chia sẻ</a>
        </div>
    </div>
    <!--end .map-->

    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div class="form-group text-center">
                           <p id="infoContent">Vui lòng chọn Tỉnh/Thành và Quận/Huyện abc</p>
                        </div>
                        <div class="border-top-modal"><img src="img/border-top-login.png"/> </div>
                        <div class="text-center">
                            <a type="button" data-dismiss="modal" class="btn btn-dangnhap btn-primary">Đóng</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
        var app = angular.module("myApp", [])
                         .config(function ($interpolateProvider) {
                                $interpolateProvider.startSymbol('[[');
                                $interpolateProvider.endSymbol(']]');
                            }); 

        app.controller("Ctrl", function($scope, $http) {
            $http.get('{{url('files/city.json')}}')
             .then(function(res){
                $scope.provinces = res.data;                
            });
            $http.get('{{url('files/district1.json')}}')
             .then(function(res){
                $scope.districts = res.data;                
            });
            $scope.selected_province =  'Tỉnh/Thành';
            $scope.selected_district =  'Quận/Huyện';
        });

        $(document).ready(function() {
          $.ajaxSetup({ cache: true });
          $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
            FB.init({
              appId: {{env('FACEBOOK_APP_ID', '472511842873549')}},
              version: 'v2.5' // or v2.0, v2.1, v2.2, v2.3
            });     
            $('#loginbutton,#feedbutton').removeAttr('disabled');
          });
        });

        document.getElementById('shareBtn').onclick = function() {
            if (!validateTinhThanh()) return;
            var icon = '{{url('img/cb1.png')}}';
            var latlng = '21.028180,105.818937';
            FB.ui({
              method: 'feed',
              link: 'http://chauau2016.fo3.garena.vn/',
              description: 'Trang web nhận diện điểm bán cyberpay',
              name:'Cyberpay Location',
              caption: 'An example caption',
              picture: 'http://maps.googleapis.com/maps/api/staticmap?zoom=16&size=512x512&maptype=ROADMAP&markers=icon:http://cdn.sstatic.net/stackoverflow/img/favicon.ico|21.028180,%20 105.818937'
            }, function(response){
              if (response && response.post_id) {
                alert('chia se thanh cong');
              }
            });
        }

        function validateTinhThanh()
        {
            if (($('#quanhuyen').val() == 'Quận/Huyện') ||($('#tinhthanh').val() == 'Tỉnh/Thành') || ($('#quanhuyen').val() == '')) 
            {
              $("#infoContent").text("Vui lòng chọn Tỉnh/Thành và Quận/Huyện");
              $('#infoModal').modal('toggle');
              return false;
            }
            return true;
        }

        document.getElementById('khampha2').onclick = function() {
            $("#infoContent").text("Vui lòng Đăng nhập");
            $('#infoModal').modal('toggle');
        }

        document.getElementById('khampha').onclick = function() {

            if (!validateTinhThanh()) return;
            $(this).hide();
            var locations;

            var myLatLng = {lat: 21.028180, lng: 105.818937};

            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 16,
              center: {lat: 21.028180, lng: 105.818937},
              mapTypeControl: false,
              zoomControl: true,
              zoomControlOptions: {
                  position: google.maps.ControlPosition.LEFT_CENTER
              },
              scaleControl: false,
              streetViewControl: false,
              fullscreenControl: false,
            });

            var geocoder = new google.maps.Geocoder();
            geocodeAddress(geocoder, map);

            document.getElementById('submit').addEventListener('click', function(event) {
                if (!validateTinhThanh()) return;
                event.preventDefault();
                geocodeAddress(geocoder, map);
            });

            var image = '{{url('img/cb2.png')}}';
            var image2 = '{{url('img/cb1.png')}}';
            var marker, i;
            $.get('{{url('/list_cafe')}}', function(locations){ 
              for (i = 0; i < locations.length; i++) {  
                marker = new google.maps.Marker({
                  position: new google.maps.LatLng(locations[i]['latitude'], locations[i]['longitude']),
                  map: map,
                  title: 'Điểm bán cyberpay',
                  icon: image
                });
                setEvenClick(marker, image2);

                var contentString = '<h5 style="color:black;">'+ locations[i]['name'] +'</h5>'+ '<p style="color:black;">' + locations[i]['address'] +' </p>';
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });
                setEvenHover(marker,infowindow);
              }

              function setEvenClick(marker, image2) {
                  marker.addListener('click', function() {
                      marker.setIcon(image2);
                      $('#shareBtn').show();
                  });
              }

              function setEvenHover(marker, infowindow) {
                google.maps.event.addListener(marker, 'mouseover', function() {
                    infowindow.open(map, marker);
                });
                google.maps.event.addListener(marker, 'mouseout', function() {
                    infowindow.close(map, marker);
                });
              }
            });
            
        }


        function geocodeAddress(geocoder, resultsMap) {
          var address = $('#quanhuyen').val() + ',' + $('#tinhthanh').val();
          geocoder.geocode({'address': address}, function(results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
              resultsMap.setCenter(results[0].geometry.location);
              resultsMap.setZoom(15);
            } else {
              console.log(status);
              alert('Geocode was not successful for the following reason: ' + status);
            }
          });
        }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtTiIXoIpki4IFSB39ugiPS7aUBAqSZHU&callback=">
    </script>
@endsection