 <!-- Content wrapper -->
 <div class="content-wrapper">

 	<!-- Content -->

 	<div class="container-xxl flex-grow-1 container-p-y">
 		<h4 class="py-3 mb-4">
 			<span class="text-muted fw-light">Projek /</span> Kontrak
 		</h4>


 		<div class="card">
 			<div class="card-header flex-column flex-md-row">
 				<div class="head-label">
 					<h5>List Kontrak</h5>
 					<small>berisi daftar kontrak dengan perusahaan atau bisnis lain</small>
 				</div>

 				<div class="dt-action-buttons text-end pt-3 pt-md-0">
 					<div class="dt-buttons">
 						<button class="dt-button create-new btn btn-primary" onclick="tambah()"><i class="ti ti-plus" style="padding-right: 5px"></i>Tambah</button>
 					</div>

 				</div>
 				<hr class="my-5">
 				<div class="card-datatable table-responsive pt-0">
 					<table class="datatables-basic table" id="table">
 						<thead>
 							<tr>
 								<th>No</th>
 								<th>Id</th>
 								<th>Nama Clien</th>
 								<th>Tanggal mulai</th>
 								<th>Tanggal selesai</th>
 								<th>File</th>
 								<th>Actions</th>
 							</tr>
 						</thead>
 					</table>
 				</div>
 			</div>
 			<!-- Modal-->
 			<div class="col-lg-4 col-md-6">
 				<div class="mt-3">

 					<div class="modal fade" id="inimodal" tabindex="-1" aria-hidden="true" style="margin-left:-250px!important">
 						<div class="modal-dialog modal-dialog-centered" role="document" style="width:300px">
 							<div class="modal-content" style="height: 564px!important;">
 								<div class="modal-header">
 									<h4 class="modal-title" style="padding-top:20px;margin-left:310px;" id="judulModal"></h4>
 									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 								</div>
 								<div class="modal-body" style="padding:64px;gap:16px">
 									<form action="" id="formModal" style="width:700px">
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="id" class="form-label">Id</label>
 												<input type="number" id="id" name="id" class="form-control" placeholder="Id-mu">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="nama_clien" class="form-label">Nama Clien</label>
 												<input type="text" id="nama_clien" name="nama_clien" class="form-control" placeholder="Nama Clien">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="tgl_mulai" class="form-label">Tanggal Mulai</label>
 												<input type="date" id="tgl_mulai" name="tgl_mulai" class="form-control" placeholder="Tanggal Mulai">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="tgl_akhir" class="form-label">Tanggal Akhir</label>
 												<input type="date" id="tgl_akhir" name="tgl_akhir" class="form-control" placeholder="Tanggal Akhir">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">

 											<label for="file" class="form-label">File</label>
 											<input type="file" id="file" name="file" class="form-control">
 											<div class="invalid-feedback"></div>

 										</div>
 									</form>
 								</div>

 								<div class="modal-footer" id="modalFoot">
 									<div class="row g-3">

 										<div class="col mb-0" style="margin-left: 0px!important; margin-right:0!important;">
 											<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" id="btnBatal">Batal</button>
 										</div>

 										<div class="col mb-0 " style="margin-right:290px!important;">
 											<button type="button" class="btn btn-primary" onclick="simpan()" id="Simpanbtn">Save</button>
 										</div>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>


 			<!-- Modal View-->
 			<div class="col-lg-4 col-md-6">
 				<div class="mt-3">

 					<div class="modal fade" id="Viewmodal" tabindex="-1" aria-hidden="true" style="margin-left:-250px!important">
 						<div class="modal-dialog modal-dialog-centered" role="document" style="width:300px">
 							<div class="modal-content" style="height: 564px!important;">
 								<div class="modal-header">
 									<h4 class="modal-title" style="padding-top:20px;margin-left:310px;" id="judulModal"></h4>
 									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 								</div>
 								<div class="modal-body" style="gap:16px">
 									<form action="" id="formModal" style="width:700px">
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="id" class="form-label">Id</label>
 												<input type="number" id="id" name="id" class="form-control" placeholder="Id-mu">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="nama_clien" class="form-label">Nama Clien</label>
 												<input type="text" id="nama_clien" name="nama_clien" class="form-control" placeholder="Nama Clien">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="tgl_mulai" class="form-label">Tanggal Mulai</label>
 												<input type="date" id="tgl_mulai" name="tgl_mulai" class="form-control" placeholder="Tanggal Mulai">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="tgl_akhir" class="form-label">Tanggal Akhir</label>
 												<input type="date" id="tgl_akhir" name="tgl_akhir" class="form-control" placeholder="Tanggal Akhir">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">

 											<label for="file" class="form-label">File</label>
 											<input type="file" id="file" name="file" class="form-control">
 											<div class="invalid-feedback"></div>

 										</div>
 									</form>
 								</div>

 								<div class="modal-footer" id="modalFoot">
 									<div class="row g-3">

 										<div class="col mb-0" style="margin-left: 0px!important; margin-right:0!important;">
 											<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" id="btnBatal">Batal</button>
 										</div>

 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>




 	<!-- Page JS -->
 	<script src="<?= base_url("public") ?>/assets/js/app-contract.js"></script>
 	<!-- Main JS -->
 	<script src="<?= base_url("public") ?>/assets/js/main.js"></script>
 	<script src="<?= base_url('assets/js/jqueryhelper.js') ?>" </script>
