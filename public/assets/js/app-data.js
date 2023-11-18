var save;
var modal = $('#modalData');
var tabel = $('#tableData')
var form = $('#formModal');
var judulmodal = $('#inijudul');
var menyimpan = $('#Simpanbtn');
var view = $('#Viewdata');
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
			"url": base_url + 'data/get_data',
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
function confirmdelete(kode_data, nama_data) {
	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Akan menghapus data " + nama_data + "?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#00bfff',
		cancelButtonColor: '#959595',
	}).then((result) => {
		if (result.isConfirmed) {
			delete_Data(kode_data);
		}
	})
}

function tambah() {
	save = 'tambah';
	modal.modal('show');
	judulmodal.text('Tambah Data');
	form[0].reset();
}

function simpan() {
	menyimpan.text('Mohon tunggu...');
	menyimpan.attr('disabled', true);
	if (save == 'tambah') {
		url = base_url + 'data/add';
	} else {
		url = base_url + 'data/edit';
	}

	$.ajax({
		type: "POST",
		url: url,
		data: form.serialize(),
		dataType: "JSON",
		success: function(response) {
			console.log('ini adalah function simpan')
			
			if (response.status == 'success') {
				$('#modalData').modal('hide');
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

function get_kode(kode_data, type) {
	if (type == 'edit') {
		save = 'edit';
		form[0].reset();
	} else {
		save = 'view';
		form[0].reset();
	}
	
	$.ajax({
		type: "GET",
		url: base_url + 'data/get_kode/'+ kode_data,
		dataType: "JSON",
		success: function(response) {
			if (type == 'edit') {
				form.find('input').removeClass('is-invalid');
				judulmodal.text('Edit Data');
				menyimpan.text('Update');
				menyimpan.attr('disabled', false);
				$('[name="kode_data"]').val(response.kode_data);
				$('[name="nama_data"]').val(response.nama_data);
				$('[name="deskripsi_data"]').val(response.deskripsi_data);
				$('[name="tipe_data"]').val(response.tipe_data);
				$('[name="berkas_data"]').val(response.berkas_data);
				$('[name="link_data"]').val(response.link_data);
				modal.modal('show');
			} else if(type =='delete'){
				confirmdelete(response.kode_data, response.nama_data);
			}
		},
		error: function() {
			toast_error();
		}
	});
	$.ajax({
		type: "GET",
		url: base_url + 'data/get_kode'+ kode_data,
		dataType: "JSON",
		success: function(response) {
			if (type == 'view') {
				form.find('input').removeClass('is-invalid');
				judulmodal.text('Detail Data');
				$('[name="kode_data"]').val(response.kode_data);
				$('[name="nama_data"]').val(response.nama_data);
				$('[name="deskripsi_data"]').val(response.deskripsi_data);
				$('[name="tipe_data"]').val(response.tipe_data);
				$('[name="berkas_data"]').val(response.berkas_data);
				$('[name="link_data"]').val(response.link_data);
				view.modal('show');
			} 
		},
		error: function() {
			toast_error();
		}
	});

}

function delete_Data(kode_data) {
	$.ajax({
		type: "POST",
		url: base_url + 'data/delete/' + kode_data,
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
