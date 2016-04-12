<!-- Latest compiled and minified CSS -->
<?php get_header(); ?>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic' rel='stylesheet' type='text/css'>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.15/css/lightgallery.min.css">

<script src="/wp-content/plugins/artdirectory/js/lightbox/js/lightgallery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.15/js/lightgallery.min.js"></script>
<script src="/wp-content/plugins/artdirectory/js/lightbox/js/lg-fullscreen.js"></script>

<style>
/* TODO Move this into a style sheet */


@font-face {
  font-family: 'OpenSans-SemiboldItalic';
  src: url('/wp-content/plugins/artdirectory/js/Fonts/OpenSans-SemiboldItalic.ttf') format('truetype');
     }

@font-face {
 font-family: 'OpenSans-SemiboldItalic';
 src: url('/wp-content/plugins/artdirectory/js/Fonts/OpenSans-SemiboldItalic.ttf') format('truetype');
    }


@font-face {
  font-family: 'OpenSans-Semibold';
  src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-Semibold.ttf') format('truetype');
     }

 @font-face {
  font-family: 'OpenSans-Regular';
  src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-Regular.ttf') format('truetype');
     }


 @font-face {
   font-family: 'OpenSans-LightItalic';
   src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-LightItalic.ttf') format('truetype');
      }


 @font-face {
   font-family: 'OpenSans-Light';
   src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-Light.ttf') format('truetype');
      }


 @font-face {
   font-family: 'OpenSans-Italic';
   src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-Italic.ttf') format('truetype');
      }

@font-face {
  font-family: 'OpenSans-ExtraBoldItalic';
  src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-ExtraBoldItalic.ttf') format('truetype');
     }

 @font-face {
   font-family: 'OpenSans-ExtraBold';
   src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-ExtraBold.ttf') format('truetype');
      }

@font-face {
  font-family: 'OpenSans-BoldItalic';
  src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-BoldItalic.ttf') format('truetype');
     }

 @font-face {
   font-family: 'OpenSans-Bold';
   src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-Bold.ttf') format('truetype');
      }

html,body{
  width: 100%;
  overflow-x: hidden;
  font-family: OpenSans-Regular;
}
.main_field > li, .nav-pills > li > .main_field{
  border: solid 1px white;
  font-weight: 300;
  border-radius: 0;
  padding-top: 2px;
  padding-bottom: 2px;
}
.main_field > a{
  color: white;
  background: none;
}
.nav-pills > li > .main_field:hover, .nav-pills > li > .sub_field:hover{
  background: light-grey;
}

li.main_field{
  margin-left: 1%;
  margin-right: 1%;
}

.main_fields{
  padding-bottom: 2%;
}

.sub_field, .nav-pills > li > .sub_field{
  color: white;
  border-radius: 0;
  background: none;
  font-weight: 300;
}

.directory_nav{
  background-image: url('/wp-content/plugins/artdirectory/assets/abbott.jpg');;
  padding-bottom: 2%;
}

.directory_header{
  text-align: center;
  margin-bottom: 15px;
  margin-top: 15px;
  color: white;
  font-weight: 300;
  font-size: 3.6em;
}

.directory_container{
  text-align: center;
}

/* Center the nav pills */
.center-pills {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
 }
.artists_query{
  margin-top: 10%;
}
 .artist_post{
   text-align: center;
 }

 .search_container{
   float:right;
 }
 #search_submit{
   padding-top: 2px;
   padding-bottom: 2px;
 }

 .artist_modal_large{
   width: 70%;
 }

 .forward-page, .back-page{
   padding-top: 70%;
 }

 @keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; }
div.artist-gallery { overflow: hidden; }
div.artist-gallery figure img { width: 20%; float: left; }
div.artist-gallery figure {
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  transition: : slidy;
}

.gallery-item.active-gal{
  display: inline-block;
}

.gallery-item{
  display: none;
}

.search-bars{
  margin-top: 5%;
}

.gallery{
  margin-bottom: 0px;
  border: solid 20px;
  border-color: #f5f4f6;
}

.modal-dialog{
  width: 90%;
  margin: auto;
}

.carousel-control.right{
  background: none;
  margin-right: 9%;
}
.carousel-control.left{
  background: none;
  margin-left: 9%;
}

.modal-header{
  padding: 20px;
  padding-bottom: 7px;
  padding-bottom: 7px;
}

.artist-contact{
  margin-top: 10%;
  margin-bottom: 10%;
}

.social-icons{
  margin-top: 3%;
}

.social-icons img{
  width: 20%;
  float: right;
  margin-right: 3%;
}

#loading_gif{
  text-align: center;
  top: 0px;
  position: absolute;

}
</style>

<body>
<div class="row directory_nav">
  <div class="container directory_container">
    <div class="row">
      <h1 class="directory_header">Greenville-Area Arts Directory</h1>
    </div>
  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills main_fields center-pills">

      </ul>
      <ul class="nav nav-pills sub_fields center-pills">

      </ul>
    </div>
  </div>
</div>
</div>

<div class="container search-bars">
  <div class="row">
    <div class="col-md-6">
      <div class="azsearch">
        <div id="slider"></div>
        <div id="display"></div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="search_container">
        <input id="search_submit" type="submit" value="search"/>
        <input id="search" placeholder="Artist's Name"/>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row artists_query">
  <div class="col-md-1">
    <img class="back-page" src="/wp-content/plugins/artdirectory/assets/arrowlarge_left.png"/>
  </div>
  <div class="col-md-10">
  <div class="row artists">

</div>
</div>
<div class="col-md-1">
    <img class="forward-page" src="/wp-content/plugins/artdirectory/assets/arrowlarge_right.png"/>
</div>
</div>
</div>
</body>

<?php get_footer(); ?>
<div class="modal fade" id="artist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog  artist_modal_large" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body artist_modal">
        <div class="row">
          <div class="col-md-8 artist-info">
            <h3 class="artist-name"></h3>
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12">
                <div class="artist-contact">
                  <h4>Contact Information</h4>
                  <div class="artist-phone"></div>
                  <div class="artist-email"></div>
                  <div class="artist-web"></div>
                  <div class="artist-address"></div>
                </div>
              </div>
              </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4>Artist Statment</h4>
                <div class="artist-statement">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 artist-gallery">
            <div class="art-gal-itself" >

            </div>


            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <img class="icon-next" src="/wp-content/plugins/artdirectory/assets/arrow_modal1_left.png"/>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <img class="icon-next" src="/wp-content/plugins/artdirectory/assets/arrow_modal1_right.png"/>
            </a>

            <div class="row">
              <div class="col-md-12 social-icons">

            </div>


          </div>
        </div>

        <div class="row">
          <div class='col-md-12'>
              <div class="map_contains">
              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
/* TODO Move this into a seperate javascript file */
var categories = {
  'Visual Arts' : ['Ceramics', 'Drawing', 'Fiber', 'Jewelry', 'Mixed Media', 'Painting', 'Photography', 'Sculpture'],
  'Performing Arts' : ['Dance', 'Music', 'Theatre'],
  'Literary Arts' : ['Organizations', 'Individuals'],
  'Museums & Galleries' : ['Museums', 'Galleries', 'Regional Museums'],
  'Open Studios' : ['Ceramics', 'Drawing', 'Fiber', 'Jewelry', 'Mixed Media', 'Painting', 'Photography', 'Sculpture' ],
  'Classes' : ['Kids', 'Visual Arts', 'Performing Arts', 'Literary Arts', 'Other']
}
function main_fields(){
    jQuery.each(categories, function (name, value) {
    onclick_function = "onclick='sub_fields(&quot;" + name + "&quot;)'"
    var field = "<li class='main_field' role='presentation' "+ onclick_function + ">" + "<a class='main_field'>" + name + "</a>" + "</li>";
    $('.main_fields').append(field);
});
  }

function sub_fields(main_field){
    $('.sub_fields').text(' ');
    jQuery.each(categories[main_field], function (name, value) {

      onclick_function = "onclick='test(&quot;" + main_field + "&quot;" + ',' + "&quot;" + value + "&quot;)'"
      var field = "<li class='sub_field' role='presentation' "+ onclick_function + ">" + "<a class='sub_field'>" + value + "</a>" + "</li>";

      $('.sub_fields').append(field);
});
  }


$("#search_submit").click(function (search_form) {
   search($('#search').val());
});

$('#search').keyup(function(search_form){
  search($('#search').val());
});

var data = {'main_term' : null,
        'second_term' : null, "offset" : 0, "search_term" : 0, "modal_open": null, "mobile": false};



main_fields();
test();
get_pagination_offset();



</script>

<style type="text/css">

.map_contains {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

/* fixes potential theme css conflict */
.map_contains img {
   max-width: inherit !important;
}

</style>
<?php
$GOOGLE_MAPS_KEY = "AIzaSyBqjvIk3rlM3YzM2vf7gDBYmfwXJaQMvw8"
?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&&key="+ <?php echo $GOOGLE_MAPS_KEY?> + "></script>
<script type="text/javascript">

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el, center ) {

	// var
	var $markers = $el.find('.marker');


	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};


	// create map
	var map = new google.maps.Map( $el[0], args);


	// add a markers reference
	map.markers = [];


	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});


	// center map
	center_map( map );


	// return
	return map;

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {
  console.log($marker)
	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;


var map_create = function map_create(){$('.map_contains').each(function(){

		// create map
		map = new_map( $(this) );


	})};
</script>
