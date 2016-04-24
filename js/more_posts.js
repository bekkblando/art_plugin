// TODO Clean up Code

var data = {'main_term' : null,
        'second_term' : null, "offset" : 0, "search_term" : 0, "modal_open": null, "mobile": false};

var main_query = function main_query(main_term_cat, second_term_cat, offset){
jQuery(document).ready(function($){
	if(!data['mobile']){
		loading()
	}
	main_query = $.ajax({
		url: more_posts.ajaxurl,
		type: "post",
		data: {
			action: "more_posts",
			main_term: main_term_cat,
			second_term: second_term_cat,
			offset: offset,
		},
		dataType: "html",
		success: function(response){
			data["main_term"] = main_term_cat
			data["second_term"] = second_term_cat
			data['search_term'] = "CATEGORIES"
			display_artist(response, data['mobile'])
			return check_if_response(response)
		}
	});
});
}

search = function search(search_title, offset){
jQuery(document).ready(function($){
	loading();
	search_query = $.ajax({
		url: more_posts.ajaxurl,
		type: "post",
		data: {
			action: "more_posts",
			search_term: search_title,
			offset: offset,
		},
		dataType: "html",
		success: function(response){
			data["search_term"] = search_title
			data["main_term"] = "SEARCH"
			display_artist(response, data['mobile'])
			return check_if_response(response)
		}
	});
});
}

alphabet = function alphabet(alphabet){
jQuery(document).ready(function($){
	loading();
	alphabet_query = $.ajax({
		url: more_posts.ajaxurl,
		type: "post",
		data: {
			action: "more_posts",
			alpha: alphabet,
			offset: offset,
		},
		dataType: "html",
		success: function(response){
			data["search_term"] = alphabet
			data["main_term"] = "SEARCH"
			display_artist(response)
			return check_if_response(response)
		}
	});
});
}





function get_pagination_offset(){
	data["offset"]  = 0
	offset = data["offset"]

	// Handle Pagination Backwards
	$('.back-page').click(function(){
		offset = data["offset"]
		if(offset != 0){
			offset = offset - 8;
			pagination_query(offset)
			data["offset"] = offset
			clean_up_pagination_ui();
		}else{
			console.log("This should never be seen")
		}
	});

	// Handle Pagination Forward
	$('.forward-page').click(function(){
		offset = data['offset'];
		offset = offset + 8;
		pagination_query(offset)
		data["offset"] = offset
		clean_up_pagination_ui();
	});
}


/* These are helper functions */

function modal_build(artist){
		data["modal_open"] = artist;
		artist_data = data[artist]
		$('.artist-name').html(artist)
		$('.artist-web').html(artist_data['website'])
		$('.artist-email').html(artist_data['email_address'])
		$('.artist-phone').html(artist_data['phone_number'])
		$('.artist-statement').html(artist_data['artists_statement']);
		if(artist_data['thumb_nail_image']){
					$('.art-gal-itself').html(build_gallery(artist));
					slide_show()
		} else{
			$('.art-gal-itself').html("No Gallery Available");
		}

    // TODO put this social media code in a helper function
    social_media = ""
		if(artist_data['facebook']){
				facebook_img = "<a href='http://" + artist_data['facebook'] + "'>"
			  facebook_img += "<img class='icon-next' src='/wp-content/plugins/artdirectory/assets/Facebook_purple_circle.png'/>"
				facebook_img += "</a>"
        social_media += facebook_img
		}

		if(artist_data['instagram']){
				instagram_img = "<a href='http://" + artist_data['instagram'] + "'>"
			  instagram_img += "<img class='icon-next' src='/wp-content/plugins/artdirectory/assets/Instagram_purple_circle.png'/>"
				instagram_img += "</a>"
        social_media += instagram_img
		}
    if(artist_data['twitter']){
        twitter_img = "<a href='http://" + artist_data['twitter'] + "'>"
        twitter_img += "<img class='icon-next' src='/wp-content/plugins/artdirectory/assets/twitter_purple_circle.png'/>"
        twitter_img += "</a>"
        social_media += twitter_img
    }
    $('.social-icons').html(social_media)
		if(artist_data['map_field']){
			$('.map_contains').replaceWith("<div class='map_contains'></div>")
			map_field = artist_data['map_field']
			$('.map_contains').show()
			marker = ""
			marker += "<div class='marker' data-lat='"  + map_field.lat + "' data-lng='" + map_field.lng + "'>"
			marker += "</div>"
			$('.map_contains').html(marker)
			setTimeout(function() { map_create(); }, 3000);
		}else{
			$('.map_contains').hide()
			$('.artist-address').html(artist_data['address'])
		}
}


// This handles the slide show aspect of the modal
function slide_show(){
	$('.art-gal-itself .gallery-item').first().toggleClass("active-gal")
	$('.left').click(function(){
		index = $( ".art-gal-itself .gallery-item" ).index( $('.active-gal') );
		if(index > 0){
			$('.active-gal').toggleClass("active-gal")
			$($( ".art-gal-itself .gallery-item" )[index - 1]).toggleClass("active-gal")
		}
		gal_ui_clean()
	});
	$('.right').click(function(){
		index = $( ".art-gal-itself .gallery-item" ).index( $('.active-gal') );
		if($( ".art-gal-itself .gallery-item" )[index+1]){
			$('.active-gal').toggleClass("active-gal")
			$($( ".art-gal-itself .gallery-item" )[index + 1]).toggleClass("active-gal")
		}
		gal_ui_clean()
	});
	gal_ui_clean()
}

function gal_ui_clean(){
	index = $( ".art-gal-itself .gallery-item" ).index( $('.active-gal') );
	if(index === 0){
		$('.left').hide()
	}else {
		$('.left').show()
	}
	if($($( ".art-gal-itself .gallery-item" )[index+1]).length){
		$('.right').show()
	}else{
		$('.right').hide()
	}
}






function build_gallery(artist){
	return data[artist+"gallery"]
}

function display_artist(response){
	cleaned_response = $.parseJSON(response);
	// cleaned_response = response.replace(/[\]\[\"]+/g, '').split(",");
	artist_posts = ""
	cleaned_response.forEach(function(artist){
		artist_posts += build_artist(artist)
	});
	if (data['mobile']){
		$('.artists').append(artist_posts);
	} else{
		$('.artists').html(artist_posts);
	}
}

function build_artist(artist){
	data[artist[0]] = artist[1]
	data[artist[0]+"gallery"] = artist[2]
	build_artist_str = ""
	build_artist_str += "<div class='col-md-3 artist_post'>"
	if(artist[1]['thumb_nail_image']){
		build_artist_str += "<img src='" + artist[1]['thumb_nail_image']['url'] + "'/>"
	}
	build_artist_str +=  "<a data-toggle='modal' data-target='#artist' onclick='modal_build("+ "&quot;" + artist[0] + "&quot;" + ")'>" + artist[0] + "</a></div>"
	build_artist_str += ""
	return build_artist_str
}

function clean_up_pagination_ui(data_length){
	offset = data["offset"];
	if(offset === 0){
		$('.back-page').hide()
	}else if (offset >= 8 && !data['mobile']) {
		$('.back-page').show()
	}
	if(data_length < 8){
		$('.forward-page').hide()
	} else if(data['mobile']){
		console.log("THis should appear")
		$('.forward-page').hide()
	}
	else{
		$('.forward-page').show()
	}
}


function pagination_query(offset){
	query_categories_main = data["main_term"];
	query_categories_second = data["second_term"]
	query_search = data["search_term"];
	if(query_search === "CATEGORIES"){
		if(query_categories_main && query_categories_second){
			return main_query(query_categories_main, query_categories_second, offset)
		}else{
			return main_query(null, null, offset)
		}
	}else{
		if(query_search){
			return search(query_search, offset)
		}
	}
}

function check_if_response(response){
	data_length = $.parseJSON(response).length
	clean_up_pagination_ui(data_length)
	if(data_length){
		return true
	}else{
		return false
	}
}

function loading(){
	loading_gif = "<img src='/wp-content/plugins/artdirectory/js/loading_spinner.gif' class='loader' />"
	$('.artists').html(loading_gif);
}

jQuery("#slider").slider({
  min: 55,
  max: 90,
  slide: function( event, ui ) {
		if(ui.value > 64){
	    jQuery('#display').text(String.fromCharCode(ui.value));
			alphabet(String.fromCharCode(ui.value))
		} else {
			digits = [55, 56, 57, 58, 59, 60, 61, 62, 63, 64]
			jQuery('#display').text(digits.indexOf(ui.value).toString())

			alphabet(digits.indexOf(ui.value).toString())
		}
  }
});


if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEmobile|Opera Mini/i.test(navigator.userAgent) ) {
	data['mobile'] = true
	$(window).scroll(function () {
     if ($(window).scrollTop() >= $(document).height() - $(window).height() - 10) {
			  console.log("Is this appearing?")
			 	data["offset"] += 8
			 	offset = data["offset"];
        pagination_query(offset)
     }
  });
}
