 <!-- Content wrapper -->
 <div class="content-wrapper">

 	<!-- Content -->

	 <h4 class="py-3 mb-4">
 			<span class="text-muted fw-light">Projek /</span> Data
 		</h4>


 		<div class="card">
 			<div class="card-header flex-column flex-md-row">
 				<div class="head-label">
 					<h5>Data Projek</h5>
 					<small>Berisi data contoh maupun ketentuan dari clien</small>
 				</div>

 				<div class="dt-action-buttons text-end pt-3 pt-md-0">
 					<div class="dt-buttons">
 						<button class="dt-button create-new btn btn-primary" onclick="tambah()"><i class="ti ti-plus"></i>Tambah</button>
 					</div>

 				</div>
 				<hr class="my-5">
 				<div class="card-datatable table-responsive pt-0">
 					<table class="datatables-basic table" id="tableData">
 						<thead>
 							<tr>
 								<th>No</th>
 								<th>Kode</th>
 								<th>Judul</th>
 								<th>Deskripsi</th>
 								<th>Tipe Data</th>
 								<th>Actions</th>
 							</tr>
 						</thead>
 					</table>
 				</div>
 			</div>
 			<!-- Modal-->
 			<div class="col-lg-4 col-md-6">
 				<div class="mt-3">

 					<div class="modal fade" id="modalData" tabindex="-1" aria-hidden="true" style="margin-left:-250px!important">
 						<div class="modal-dialog modal-dialog-centered" role="document" style="width:300px">
 							<div class="modal-content" style="height: 564px!important;">
 								<div class="modal-header">
 									<h4 class="modal-title" style="padding-top:20px;margin-left:310px;" id="inijudul"></h4>
 									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 								</div>
 								<div class="modal-body" style="padding:64px;gap:16px">
 									<form action="" id="formModal" style="width:700px">
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="kode_data" class="form-label">Kode</label>
 												<input type="text" id="kode_data" name="kode_data" class="form-control" placeholder="Kode Floww">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="nama_data" class="form-label">Nama</label>
 												<input type="text" id="nama_data" name="nama_data" class="form-control" placeholder="Nama flow">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="deskripsi_data" class="form-label">Deskripsi</label>
 												<input type="text" id="deskripsi_data" name="deskripsi_data" class="form-control" placeholder="Deskripsi Flow">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="tipe" class="form-label">Tipe Data</label>
 												<select class="form-select" name="tipe_data">
 													<option value="" disabled selected hidden>Tipe Data</option>
 													<option value="link">Link</option>
 													<option value="file">File</option>
 												</select>
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="berkas" class="form-label">Berkas</label>
 												<input type="file" id="berkas_data" name="harga_data" class="form-control">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="link" class="form-label">Link</label>
 												<input type="text" id="link_data" name="link_data" class="form-control" placeholder="link">
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
 										<button type="button" class="btn btn-primary" onclick="simpan()" id="Simpanbtn">Save</button>
 									</div>
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

 				<div class="modal fade" id="Viewdata" tabindex="-1" aria-hidden="true" style="margin-left:-250px!important">
 					<div class="modal-dialog modal-dialog-centered" role="document" style="width:300px">
 						<div class="modal-content" style="height: 564px!important;">
 							<div class="modal-header">
 								<h4 class="modal-title" style="padding-top:20px;margin-left:310px;" id="inijudul"></h4>
 								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 							</div>
 							<div class="modal-body" style="padding:64px;gap:16px">
 								<form action="" id="formModal" style="width:700px">
 									<div class="row g-2">
 										<div class="col mb-0">
 											<label for="kode_data" class="form-label">Kode</label>
 											<input type="text" id="kode_data" name="kode_data" class="form-control" placeholder="Kode Floww">
 											<div class="invalid-feedback"></div>
 										</div>
 										<div class="col mb-0">
 											<label for="nama_data" class="form-label">Nama</label>
 											<input type="text" id="nama_data" name="nama_data" class="form-control" placeholder="Nama flow">
 											<div class="invalid-feedback"></div>
 										</div>
 									</div>
 									<div class="row g-2">
 										<div class="col mb-0">
 											<label for="deskripsi_data" class="form-label">Deskripsi</label>
 											<input type="text" id="deskripsi_data" name="deskripsi_data" class="form-control" placeholder="Deskripsi Flow">
 											<div class="invalid-feedback"></div>
 										</div>
 										<div class="col mb-0">
 											<label for="tipe" class="form-label">Tipe Data</label>
 											<select class="form-select" name="tipe_data">
 												<option value="" disabled selected hidden>Tipe Data</option>
 												<option value="link">Link</option>
 												<option value="file">File</option>
 											</select>
 											<div class="invalid-feedback"></div>
 										</div>
 									</div>
 									<div class="row g-2">
 										<div class="col mb-0">
 											<label for="berkas" class="form-label">Berkas</label>
 											<input type="file" id="berkas_data" name="harga_data" class="form-control">
 											<div class="invalid-feedback"></div>
 										</div>
 										<div class="col mb-0">
 											<label for="link" class="form-label">Link</label>
 											<input type="text" id="link_data" name="link_data" class="form-control" placeholder="link">
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

 <!-- Page JS -->
 <script src="<?= base_url("public") ?>/assets/js/app-data.js"></script>
 <!-- Main JS -->
 <script src="<?= base_url("public") ?>/assets/js/main.js"></script>
 <script src="<?= base_url('assets/js/jqueryhelper.js') ?>" </script>
