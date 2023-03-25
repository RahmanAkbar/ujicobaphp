$(document).ready(function() {

	// event ketika keyword ditulis
	$('#keword').on('keyup', function() {
		$('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());
	})
})