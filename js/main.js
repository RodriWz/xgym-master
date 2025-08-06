/* ===================================
--------------------------------------
  X Gym - Fitness HTML Template
  Version: 1.0
--------------------------------------
======================================*/


'use strict';

$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut();
	$("#preloder").delay(400).fadeOut("slow");

});

(function($) {
	/*------------------
		Navigation
	--------------------*/
	$(".main-menu").slicknav({
        appendTo: '.header-section',
        allowParentLinks: true
    });

	/*------------------
		Background Set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

	/*------------------
		BMI calculator
	--------------------*/
	// Fungsi untuk menghitung BMI
function computeBMI() {
	const heightInput = parseFloat(document.getElementById("bmi-height").value);
	const weight = parseFloat(document.getElementById("bmi-weight").value);

	if (isNaN(heightInput) || isNaN(weight) || heightInput <= 0 || weight <= 0) {
		document.getElementById("bmi-result").value = "Input tidak valid";
		return;
	}

	// Konversi tinggi dari cm ke meter
	const height = heightInput / 100;

	const result = weight / (height * height);
	const output = Math.round(result * 100) / 100;
	let kategori = "";

	if (output < 18.5) {
		kategori = "Underweight";
	} else if (output < 25) {
		kategori = "Normal";
	} else if (output < 30) {
		kategori = "Overweight";
	} else {
		kategori = "Obese";
	}

	document.getElementById("bmi-result").value = output + " (" + kategori + ")";
}


// Event listener saat tombol diklik
$(document).ready(function () {
	$('#bmi-submit').on('click', function(e) {
		e.preventDefault(); // Mencegah reload form jika tombol berada di dalam <form>
		computeBMI(); // Panggil fungsi hitung BMI
	});
});



	/*------------------
		Accordions
	--------------------*/
	$('.panel-link').on('click', function (e) {
		$('.panel-link').removeClass('active');
		var $this = $(this);
		if (!$this.hasClass('active')) {
			$this.addClass('active');
		}
		e.preventDefault();
	});


	/*------------------
		Circle progress
	--------------------*/
	$('.circle-progress').each(function() {
		var cpvalue = $(this).data("cpvalue");
		var cpcolor = $(this).data("cpcolor");
		var cptitle = $(this).data("cptitle");
		var cpid 	= $(this).data("cpid");

		$(this).append('<div class="'+ cpid +'"></div><div class="progress-info"><h2>'+ cpvalue +'%</h2><p>'+ cptitle +'</p></div>');

		if (cpvalue < 100) {

			$('.' + cpid).circleProgress({
				value: '0.' + cpvalue,
				size: 211,
				thickness: 5,
				fill: cpcolor,
				emptyFill: "rgba(0, 0, 0, 0)"
			});
		} else {
			$('.' + cpid).circleProgress({
				value: 1,
				size: 211,
				thickness: 5,
				fill: cpcolor,
				emptyFill: "rgba(0, 0, 0, 0)"
			});
		}
	});

})(jQuery);
