 <!-- Content wrapper -->
 <div class="content-wrapper">

 	<!-- Content -->

 	<div class="container-xxl flex-grow-1 container-p-y">
 		<h4 class="py-3 mb-4">
 			<span class="text-muted fw-light">Asset /</span> Produk
 		</h4>


 		<div class="card">
 			<div class="card-header flex-column flex-md-row">
 				<div class="head-label">
 					<h5>Daftar Produk</h5>
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
 								<th>Kode</th>
 								<th>Nama</th>
 								<th>Deskripsi</th>
 								<th>Harga</th>
 								<th>Link</th>
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
 												<label for="kode" class="form-label">Kode</label>
 												<input type="text" id="kode_prod" name="kode_prod" class="form-control" placeholder="kode produk">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="nama" class="form-label">Nama</label>
 												<input type="text" id="nama" name="nama" class="form-control" placeholder="nama produk">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="deskripsi" class="form-label">Deskripsi</label>
 												<input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="deskripsi produk">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="tgl_prod" class="form-label">Tanggal Produksi</label>
 												<input type="date" id="tgl_prod" name="tgl_prod" class="form-control" placeholder="tanggal selesai">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="harga" class="form-label">Harga</label>
 												<input type="number" id="harga" name="harga" class="form-control" placeholder="harga">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="link" class="form-label">Link</label>
 												<input type="text" id="link" name="link" class="form-control">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 								</div>
 								</form>
 								<div class="modal-footer" id="modalFoot">
 									<div class="row g-3">

 										<div class="col mb-0" style="margin-left: 0px!important; margin-right:0!important;">
 											<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal" id="btnBatal">Batal</button>
 										</div>

 										<div class="col mb-0 " style="margin-right:290px!important;">
 											<button type="button" class="btn btn-primary" onclick="simpan()" id="btnSimpan">Save</button>
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
 									<h4 class="modal-title" style="padding-top:20px;margin-left:310px;">Detail Produk</h4>
 									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 								</div>
 								<div class="modal-body" style="padding:64px;gap:16px">
 									<form action="" id="formModal" style="width:700px">
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="kode" class="form-label">Kode</label>
 												<input type="text" id="kode_prod" name="kode_prod" class="form-control" placeholder="kode produk">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="nama" class="form-label">Nama</label>
 												<input type="text" id="nama" name="nama" class="form-control" placeholder="nama produk">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="deskripsi" class="form-label">Deskripsi</label>
 												<input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="deskripsi produk">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="tgl_prod" class="form-label">Tanggal Produksi</label>
 												<input type="date" id="tgl_prod" name="tgl_prod" class="form-control" placeholder="tanggal selesai">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="harga" class="form-label">Harga</label>
 												<input type="number" id="harga" name="harga" class="form-control" placeholder="harga">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="link" class="form-label">Link</label>
 												<input type="text" id="link" name="link" class="form-control">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 									</div>
 								</form>
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
 </div>

 

 <!-- Page JS -->
 <script src="<?= base_url("public") ?>/assets/js/app-product.js"></script>
 <!-- Main JS -->
 <script src="<?= base_url("public") ?>/assets/js/main.js"></script>
 <script src="<?= base_url('assets/js/jqueryhelper.js') ?>" </script>
