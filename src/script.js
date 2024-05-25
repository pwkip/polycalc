// make tables sortable by clicking on the header

// get all tables
var tables = document.getElementsByTagName('table');

// loop through all tables
for (var i = 0; i < tables.length; i++) {
    // get all headers
    var headers = tables[i].getElementsByTagName('th');

    // loop through all headers
    for (var j = 0; j < headers.length; j++) {
        // add click event listener to each header
        headers[j].addEventListener('click', function() {
            // get table
            var table = this.closest('table');

            // get all rows
            var rows = table.getElementsByTagName('tr');

            // get all cells
            var cells = table.getElementsByTagName('td');

            // get index of clicked header
            var index = Array.prototype.indexOf.call(this.parentNode.children, this);

            // get all rows except the first one
            var rowsArray = Array.prototype.slice.call(rows, 1);

            // get all cells in the column
            var cellsArray = Array.prototype.slice.call(cells, index, cells.length);

            // sort the rows
            rowsArray.sort(function(a, b) {                
                // if the cells contain numbers, sort them as numbers
                var aVal = parseFloat(a.cells[index].innerText);
                var bVal = parseFloat(b.cells[index].innerText);
                if (!isNaN(aVal) && !isNaN(bVal)) {
                    return aVal - bVal;
                }

                // if the cells contain strings, sort them as strings
                var aVal = a.cells[index].innerText;
                var bVal = b.cells[index].innerText;
                if (aVal < bVal) {
                    return -1;
                } else if (aVal > bVal) {
                    return 1;
                } else {
                    return 0;
                }
            });

            // remove all rows from the table
            while (table.rows.length > 1) {
                table.deleteRow(1);
            }

            // add rows back to the table
            for (var k = 0; k < rowsArray.length; k++) {
                table.appendChild(rowsArray[k]);
            }
        });
    }
}