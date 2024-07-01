var cleave = new Cleave('#date-formatting', {
	date: true,
	delimiter: '-',
	datePattern: ['d', 'm', 'Y']
});


var cleave = new Cleave('#date-formatting2', {
	date: true,
	datePattern: ['m', 'y']
});



var cleaveG = new Cleave('#input-numeral-lakh', {
	numeral: true,
	numeralThousandsGroupStyle: 'lakh'
});