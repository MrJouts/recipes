$(function () {
	$('[data-toggle="tooltip"]').tooltip()

  // Sidebar toggle

  $('.fa-bars').on('click', function() {
  	$('.menu-cpanel').toggleClass('active')
  	$('.container-cpanel').toggleClass('active');
  	$('.main').toggleClass('compress');
  })

  ClassicEditor
  .create( document.querySelector( '#ingredientes' ), {
  	toolbar: [ 'bold', 'italic', 'bulletedList', 'numberedList' ]
  } )
  .then( editor => {
  	console.log( editor );
  } )
  .catch( error => {
  	console.error( error );
  } );

  ClassicEditor
  .create( document.querySelector( '#preparacion' ) )
  .then( editor => {
  	console.log( editor );
  } )
  .catch( error => {
  	console.error( error );
  } );


})