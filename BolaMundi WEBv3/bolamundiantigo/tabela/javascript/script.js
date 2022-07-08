$(document).ready(function() {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.
	document.title='DataTable Excel';
	// DataTable initialisation
	$('#example').DataTable(
		{
			"dom": '<"dt-buttons"Bf><"clear">lirtp',
			"paging": true,
			"autoWidth": true,
			"buttons": [
					{
            extend: 'excelHtml5',
            text: 'Excel',
            customize: function( xlsx ) {
							var sheet = xlsx.xl.worksheets['sheet1.xml'];
    					// Get reference to the worksheet and parse it to xml nodes
							// Has to be done this way to avoid creation of namespace atributes.
							var afSerializer = new XMLSerializer();
							var xmlString = afSerializer.serializeToString(sheet);
							var parser = new DOMParser();
							var xmlDoc = parser.parseFromString(xmlString,'text/xml');
							//Create header and add it to the worksheet
							var headerFooter = xmlDoc.createElementNS('http://schemas.openxmlformats.org/spreadsheetml/2006/main','headerFooter');
							sheet.getElementsByTagName('worksheet')[0].appendChild(headerFooter);
							var nodeHeaderFooter = sheet.getElementsByTagName("headerFooter");
							//Creation of the header
							var oddHeader = xmlDoc.createElementNS('http://schemas.openxmlformats.org/spreadsheetml/2006/main','oddHeader');
							nodeHeaderFooter[0].appendChild(oddHeader);
							var nodeOddHeader = sheet.getElementsByTagName("oddHeader");
							//The header/footer column definitions
							// If unwanted, you can skip a column
							//&L = Left column
							//&F = Filename
							//&A = sheetname
							//&C = Center column
							//&D = Date
							//&T = Time
							//&R = Right Column
							//&P = Pagenumber
							//&N = Total number of pages
							var txtHeader = "&L"+"&F - &A"+"&R"+"&D - &T";
							var nodeHeader = xmlDoc.createTextNode(txtHeader);
							nodeOddHeader[0].appendChild(nodeHeader);
							//Creation of the footer
							var oddFooter = xmlDoc.createElementNS('http://schemas.openxmlformats.org/spreadsheetml/2006/main','oddFooter');
							nodeHeaderFooter[0].appendChild(oddFooter);
							var nodeOddFooter = sheet.getElementsByTagName("oddFooter");
							var txtFooter = "&R"+"Page &P of &N";
							var nodeFooter = xmlDoc.createTextNode(txtFooter);
							nodeOddFooter[0].appendChild(nodeFooter);
							//Add header and footer to the worksheet
							sheet.getElementsByTagName('worksheet')[0].appendChild(headerFooter);
						}
					}
			]
		}
	);
});