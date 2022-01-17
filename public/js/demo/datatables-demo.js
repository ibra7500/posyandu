// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});

$(document).ready(function() {
  $('#balita').DataTable( {
      "scrollY":        "150px",
      "scrollCollapse": true,
      "paging":         false,
      "searching": false
  } );
} );
$(document).ready(function() {
  $('#balita_lebih').DataTable( {
      "scrollY":        "150px",
      "scrollCollapse": true,
      "paging":         false,
      "searching": false
  } );
} );

$(document).ready(function() {
  $('#vaksin').DataTable( {
      "scrollY":        "150px",
      "scrollCollapse": true,
      "paging":         false,
      "searching": false
  } );
} );

$(document).ready(function() {
  $('#ibuhamil').DataTable( {
      "scrollY":        "150px",
      "scrollCollapse": true,
      "paging":         false,
      "searching": false
  } );
} );

$(document).ready(function() {
  $('#timbang').DataTable( {
      "scrollY":        "500px",
      "scrollCollapse": true,
      "paging":         false,
      "searching": false
  } );
} );
