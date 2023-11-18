 <!-- Content wrapper -->
 <div class="content-wrapper">

 	<!-- Content -->

 	<div class="container-xxl flex-grow-1 container-p-y">
 		<h4 class="py-3 mb-4">
 			<span class="text-muted fw-light">Asset/</span> Blog
 		</h4>


 		<div class="card">
 			<div class="card-header flex-column flex-md-row">
 				<div class="head-label">
 					<h5>Daftar Blog</h5>
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
 								</th>
 								<th>Judul</th>
 								<th>Kategori</th>
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
 												<label for="id" class="form-label">Id</label>
 												<input type="number" id="id" name="id" class="form-control" placeholder="Id">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="judul" class="form-label">Judul</label>
 												<input type="text" id="judul" name="judul" class="form-control" placeholder="judul">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>

 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="jenis" class="form-label ">Kategori</label>
 												<select class="form-select" name="kategori">
 													<option value="" disabled selected hidden>Kategori Blog</option>
 													<option value="Solusi Tukang">Solusi Tukang</option>
 													<option value="Bisnis">Bisnis</option>
 												</select>
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="potongan" class="form-label">Link</label>
 												<input type="text" id="link" name="link" class="form-control" placeholder="https://blog.com">
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
 		</div>
 	</div>
 </div>

 <!-- Page JS -->
 <script src="<?= base_url("public") ?>/assets/js/app-blog.js"></script>
 <!-- Main JS -->
 <script src="<?= base_url("public") ?>/assets/js/main.js"></script>
