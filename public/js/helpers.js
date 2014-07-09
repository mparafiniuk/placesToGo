// navbar
$('.menu li a').click(function(e) {
  var $this = $(this);
  if (!$this.hasClass('active')) {
    $this.addClass('active');
  }
  e.preventDefault();
});

// delete modal
$(document).on("click", "#toogle-delete-modal", function () {
     var placeID = $(this).data('id');
     $(".modal-footer #delete-form").attr('action', '/places/'+ placeID);
});

// edit modal
$(document).on("click", "#toogle-edit-modal", function() {
	var placeID = $(this).data('id');
	var placeName = $("td[id=place-name-"+placeID+"]").text();
	var placeAddress = $("td[id=place-address-"+placeID+"]").text();
	var placeInfo = $("td[id=place-info-"+placeID+"]").text();
	var placeLink = $("td[id=place-link-"+placeID+"]").text();
	var placeVisited = $("tr[id=place-"+placeID+"]").attr('class');

	$("#modalEdit .modal-body #name").val(placeName);
	$(".modal-body #address").val(placeAddress);
	$(".modal-body #info").val(placeInfo);
	$(".modal-body #link").val(placeLink);
	$(".modal-body #visited").prop('checked', (placeVisited == 'success'?true:false));

	$(".modal-body #edit-form").attr('action', '/places/'+ placeID);
});

