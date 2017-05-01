// JavaScript Document

$(document).ready(function() {
	"use strict";
	$("#accordion").accordion();
	
	var schoolList = [
		"School of Informatics and Computing",
		"School of Global and International Studies",
		"School of Hard Knocks"
	];
	
	$("#schools").autocomplete({source: schoolList});
	
	$("#tabs").tabs();
	
	$("#datepicker").datepicker();
});