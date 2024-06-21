var save;
var modal = $('#inimodal');
var tabel = $('#table')
var form = $('#formModal');
var judulmodal = $('#judulModal');
var menyimpan = $('#btnSimpan');
var view = $('#Viewmodal');
//SweetAlert
var toast_add = (icon, text) => {
	Swal.fire({
		icon: 'success',
		text: 'Data berhasil ditambahkan',
		position: 'top-end',
		showConfirmButton: false,
		showCloseButton: false,
		timer: '3000',
		timerProgressBar: true,
	});
}

var toast_edit= (icon, text) => {
	Swal.fire({
		icon: 'success',
		text: 'Data berhasil diubah',
		position: 'top-end',
		showConfirmButton: false,
		showCloseButton: false,
		timer: '3000',
		timerProgressBar: true,
	});
}

var toast_delete = (icon, text) => {
	Swal.fire({
		icon: 'success',
		text: 'Data berhasil dihapus',
		position: 'top-end',
		showConfirmButton: false,
		showCloseButton: false,
		timer: '3000',
		timerProgressBar: true,
	});
}

var toast_error = (icon, text) => {
	Swal.fire({
		icon: 'error',
		text: 'Terjadi kesalahan, silahkan ulangi kembali',
		position: 'top-end',
		showConfirmButton: false,
		showCloseButton: false,
		timer: '3000',
		timerProgressBar: true,
	});
}

// Datatable

$(document).ready(function() {
	tabel.DataTable({
		paging: true,
		searching: true,
		ordering: true,
		info: true,
		processing: true,
		serverSide: true,
		responsive: true,
		dom: '<"row px-1" <"col-md-6 col-12" l> <"col-md-6 col-12" f>>rt<"row px-1" <"col-md-6 col-12" i> <"col-md-6 col-12" p>>',
		order: [],
		"ajax": {
			"url": base_url + 'flow/get_data',
			"type": "POST",
		},
		"columnDefs": [
			{
			"target": [-1],
			"orderable": false,
			}]
	});
});

function reloadTable() {
	tabel.DataTable().ajax.reload();
}
function confirmDelete(kode, nama) {
	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Akan menghapus data " + nama + "?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#00bfff',
		cancelButtonColor: '#959595',
	}).then((result) => {
		if (result.isConfirmed) {
			delete_Data(kode);
		}
	})
}

function tambah() {
	save = 'tambah';
	modal.modal('show');
	judulmodal.text('Tambah Flow');
	form[0].reset();
}

function simpan() {
	menyimpan.text('Mohon tunggu...');
	menyimpan.attr('disabled', true);
	if (save == 'tambah') {
		url = base_url + 'flow/create';
	} else {
		url = base_url + 'flow/update';
	}

	$.ajax({
		type: "POST",
		url: url,
		data: form.serialize(),
		dataType: "JSON",
		success: function(response) {
			console.log('ini adalah function simpan')
			
			if (response.status == 'success') {
				$('#inimodal').modal('hide');
				reloadTable();
				if (save == 'tambah') {
				toast_add();
				} else {
					toast_edit();
				}
			} else {
				if (response.inputerror) {
					for (var i = 0; i < response.inputerror.length; i++) {
						$('[name="' + response.inputerror[i] + '"]').addClass('is-invalid');
						$('[name="' + response.inputerror[i] + '"]').next().text(response.error_string[i]);
					}
				}
			}
			menyimpan.text('Simpan Data');
			menyimpan.attr('disabled', false);
		},
		error: function() {
			toast_error();
		}
	});
}

function get_kode(kode, type) {
	if (type == 'edit') {
		save = 'edit';
		form[0].reset();
	} else {
		save = 'view';
		form[0].reset();
	}
	
	$.ajax({
		type: "GET",
		url: base_url + 'flow/get_kode/'+ kode,
		dataType: "JSON",
		success: function(response) {
			if (type == 'edit') {
				form.find('input').removeClass('is-invalid');
				judulmodal.text('Edit Flow');
				menyimpan.text('Update');
				menyimpan.attr('disabled', false);
				$('[name="kode"]').val(response.kode);
				$('[name="nama"]').val(response.nama);
				$('[name="deskripsi"]').val(response.deskripsi);
				$('[name="tipe"]').val(response.tipe);
				$('[name="berkas"]').val(response.berkas);
				$('[name="link"]').val(response.link);

				modal.modal('show');
			} else if(type =='delete'){
				confirmDelete(response.kode, response.nama);
			}
		},
		error: function() {
			toast_error();
		}
	});
	$.ajax({
		type: "GET",
		url: base_url + 'flow/get_kode/'+ kode,
		dataType: "JSON",
		success: function(response) {
			if (type == 'view') {
				form.find('input').removeClass('is-invalid');
				judulmodal.text('Detail Flow');
				$('[name="kode"]').val(response.kode);
				$('[name="nama"]').val(response.nama);
				$('[name="deskripsi"]').val(response.deskripsi);
				$('[name="tipe"]').val(response.tipe);
				$('[name="berkas"]').val(response.berkas);
				$('[name="link"]').val(response.link);

				view.modal('show');
			}
		},
		error: function() {
			toast_error();
		}
	});

}

function delete_Data(kode) {
	$.ajax({
		type: "POST",
		url: base_url + 'flow/delete/' + kode,
		dataType: "JSON",
		success: function(response) {
			reloadTable();
			toast_delete();
		},
		error: function() {
			toast_error();
		}
	});
}
