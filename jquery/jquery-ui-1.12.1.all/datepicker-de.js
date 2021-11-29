function localizeDatepicker() {
	var datepickerRegionalDe = {
			showOn: "button",
		    buttonImage: "symbol/calendar-small.png",
		    buttonImageOnly: true,
			buttonText: "Datum wählen",
	        dateFormat: "yy-mm-dd",
	        closeText: "Schließen",
	      	prevText: "voriger Monat",
	      	nextText: "nächster Monat",
	      	currentText: "Heute",
	      	monthNames: [ "Jänner", "Februar", "März", "April", "Mai", "Juni",
	      		"Juli", "August", "September", "Oktober", "November", "Dezember" ],
	      	monthNamesShort: [ "Jan.", "Feb.", "März", "Apr.", "Mai", "Juni",
	      		"Juli", "Aug.", "Sept.", "Okt.", "Nov.", "Dez." ],
	      	dayNames: [ "Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag" ],
	      	dayNamesShort: [ "So.", "Mo.", "Di.", "Mi.", "Do.", "Fr.", "Sa." ],
	      	dayNamesMin: [ "So","Mo","Di","Mi","Do","Fr","Sa" ],
	      	weekHeader: "WE",
	      	showOtherMonths: true,
		    selectOtherMonths: true,
		    //changeMonth: true,
		    //changeYear: true
	};
	return datepickerRegionalDe;
}