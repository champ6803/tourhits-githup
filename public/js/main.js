$(function(){
   $(window).endlessScroll({
		inflowPixels: 300,
		callback: function() {
			var $img = $('#images li:nth-last-child(5)').clone();
			$('#images').append($img);
		}
	}); 
});
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

function getDateNow() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!

    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd;
    }
    if (mm < 10) {
        mm = '0' + mm;
    }
    return yyyy + '-' + mm + '-' + dd;
}

function changeFormateDate(date) {
    var date_split = date.split("-");
    var dd =  date_split[2];
    var mm = date_split[1];
    var yyyy = date_split[0];
    return dd + '/' + mm + '/' + yyyy;
}

function setMonthString(month) {
    var monthString = "";
    if (month === "01") {
        monthString = "มกราคม";
    }
    if (month === "02") {
        monthString = "กุมภาพันธ์";
    }
    if (month === "03") {
        monthString = "มีนาคม";
    }
    if (month === "04") {
        monthString = "เมษายน";
    }
    if (month === "05") {
        monthString = "พฤษภาคม";
    }
    if (month === "06") {
        monthString = "มิถุนายน";
    }
    if (month === "07") {
        monthString = "กรกฎาคม";
    }
    if (month === "08") {
        monthString = "สิงหาคม";
    }
    if (month === "09") {
        monthString = "กันยายน";
    }
    if (month === "10") {
        monthString = "ตุลาคม";
    }
    if (month === "11") {
        monthString = "พฤศจิกายน";
    }
    if (month === "12") {
        monthString = "ธันวาคม";
    }
    return monthString;
}

function setYearToBE(year) {
    var yearBE = year + 543;
    return yearBE;
}

function setCTMonthString(month) {
    var monthString = "";
    if (month === "01") {
        monthString = "ม.ค.";
    }
    if (month === "02") {
        monthString = "ก.พ.";
    }
    if (month === "03") {
        monthString = "มี.ค.";
    }
    if (month === "04") {
        monthString = "เม.ย.";
    }
    if (month === "05") {
        monthString = "พ.ค.";
    }
    if (month === "06") {
        monthString = "มิ.ย.";
    }
    if (month === "07") {
        monthString = "ก.ค.";
    }
    if (month === "08") {
        monthString = "ส.ค.";
    }
    if (month === "09") {
        monthString = "ก.ย.";
    }
    if (month === "10") {
        monthString = "ต.ค.";
    }
    if (month === "11") {
        monthString = "พ.ย.";
    }
    if (month === "12") {
        monthString = "ธ.ค.";
    }
    return monthString;
}

const numberWithCommas = (x) => {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

const removeCommas = (x) => {
    return x.toString().replace(/,\s?/g, "");
}