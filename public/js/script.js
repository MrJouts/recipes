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

  $('.form-alta, .form-editar').on('submit', function() {

    var contenidoIngredientes = $('#ingredientes').val();
    var contenidoPreparacion = $('#preparacion').val();

    if (contenidoIngredientes == '<p>&nbsp;</p>') {
      $('#ingredientes').val('');
    }

    if (contenidoPreparacion == '<p>&nbsp;</p>') {
      $('#preparacion').val('');
    }
    
  });


    /* Mostrar imagen al cargarla en el formulario */

    var imgSrc = document.getElementById('img_src');
    console.log(imgSrc);

    if( imgSrc !== null ) {
        imgSrc.onchange = function (evt) {

            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;

            // FileReader support
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = function () {
                    console.log(fr);
                    document.getElementById('img-preview').src = fr.result;
                }
                fr.readAsDataURL(files[0]);
            }

            // Not supported
            else {
                // fallback -- perhaps submit the input to an iframe and temporarily store
                // them on the server until the user's session ends.
            }
        }
    }


})