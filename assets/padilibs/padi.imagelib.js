/*
 * WRITTEN BY PUJI W PRAYITNO
 * 06-2015
 * mailto:puji@padi.net.id
 * */
function resizeImage(url, callback){
	var canvas = document.createElement("canvas");
	var MAX_WIDTH_ALLOWED = 1600;
	var MAX_HEIGHT = 0;
	canvas.width = 1600;
	var img = new Image();
	img.onload = function(){
		MAX_HEIGHT = img.height * MAX_WIDTH_ALLOWED / img.width;
		canvas.height = MAX_HEIGHT;
		var ctx = canvas.getContext("2d");
		ctx.drawImage(img, 0, 0, MAX_WIDTH_ALLOWED, MAX_HEIGHT);
		callback(canvas.toDataURL("image/jpeg"));
	}
	img.src = url;
}
function resizeImage2(url,width, callback){
	var canvas = document.createElement("canvas");
	var MAX_WIDTH_ALLOWED = width;
	var MAX_HEIGHT = 0;
	canvas.width = width;
	var img = new Image();
	img.onload = function(){
		MAX_HEIGHT = img.height * MAX_WIDTH_ALLOWED / img.width;
		canvas.height = MAX_HEIGHT;
		var ctx = canvas.getContext("2d");
		ctx.drawImage(img, 0, 0, MAX_WIDTH_ALLOWED, MAX_HEIGHT);
		callback(canvas.toDataURL("image/jpeg"));
	}
	img.src = url;
}


function viewImage(elem){
	var _this = $(elem).stairUp({level:3});
	$("#tImage tbody tr").each(function(){
		$(this).removeClass("selected");
	});
	_this.addClass("selected");
	var src = elem.src;
	$("#output").attr("src",src);
	$("#file_description").val($("#tImage tbody tr.selected td.image_description").html());
	$("#myModalImageLabel").html("Edit Gambar Survey");
	$("#dAddSurveyImage").modal();
}
function uploadImage1(evt){
  var input = evt.target;
  var fileReader = new FileReader();
  fileReader.onloadend = function(){
	  $("body").css("cursor","wait");
	  $("#savesurveyimage").prop("disabled",true);
		resizeImage(fileReader.result,function(uri){
			$("#output").attr("src",uri);
			$("#survimageurl").val(uri);
			$("body").css("cursor","default");
			$("#savesurveyimage").prop("disabled",false);
		});
  }
  fileReader.readAsDataURL(input.files[0]);
}
function changeImage(evt){
  var input = evt.target;
  var fileReader = new FileReader();
  fileReader.onload = function(){
	$("body").css("cursor","wait");
	$("#saveEditSurveyImage").prop("disabled",true);
	$(".closemodal").prop("disabled",true);
	resizeImage(fileReader.result,function(uri){
		$("#hiddenEditImage").val(uri);
		$("#changeSurveyImage").attr("src",uri);
		$("body").css("cursor","default");
		$("#saveEditSurveyImage").prop("disabled",false);
		$(".closemodal").prop("disabled",false);
	});
  }
  fileReader.readAsDataURL(input.files[0]);
}