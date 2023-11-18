 <!-- Content wrapper -->
 <div class="content-wrapper">

 	<!-- Content -->

 	<div class="container-xxl flex-grow-1 container-p-y">
 		<h4 class="py-3 mb-4">
 			<span class="text-muted fw-light">User </span> 
 		</h4>


 		<div class="card">
 			<div class="card-header flex-column flex-md-row">
 				<div class="head-label">
 					<h5>Daftar User</h5>
 				</div>

 				<div class="dt-action-buttons text-end pt-3 pt-md-0">
 					<div class="dt-buttons">
 						<button class="dt-button create-new btn btn-primary" onclick="tambah()"><i class="ti ti-plus"></i>Tambah</button>
 					</div>

 				</div>
 				<hr class="my-5">
 				<div class="card-datatable table-responsive pt-0">
 					<table class="datatables-basic table" id="table">
 						<thead>
 							<tr>
 								<th>Id</th>
 								<th>Nama</th>
 								<th>Username</th>
 								<th>Password</th>
 								<th>Role</th>
 								<th>Actions</th>
 							</tr>
 						</thead>
 					</table>
 				</div>
 			</div>
 			<!-- Modal-->
 			<div class="col-lg-4 col-md-6">
 				<div class="mt-3">

 					<div class="modal fade" id="inimodal" tabindex="-1" aria-hidden="true"style="margin-left:-250px!important">
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
 												<input type="text" id="id" name="id" class="form-control" placeholder="id-user">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="nama" class="form-label">Nama</label>
 												<input type="text" id="nama" name="nama" class="form-control" placeholder="nama lengkapmu">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="username" class="form-label">Username</label>
 												<input type="text" id="username" name="username" class="form-control" placeholder="username">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="email" class="form-label">Email</label>
 												<input type="email" id="email" name="email" class="form-control" placeholder="mail@gmail.com">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="jpassword" class="form-label ">Passsword</label>
 												<input type="password" id="password" name="password" class="form-control" placeholder="password">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="notelp" class="form-label">No Telepon</label>
 												<input type="number" id="notelp" name="notelp" class="form-control" placeholder="08781234567">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="alamat" class="form-label">Alamat</label>
 												<input type="text" id="alamat" name="alamat" class="form-control" placeholder="alamat">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="role" class="form-label">Role</label>
 												<select class="form-select" name="status">
 													<option value="" disabled selected hidden>Role</option>
 													<option value="admin">Admin</option>
 													<option value="user">User</option>
 												</select>
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 									</form>
								</div>
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

			 <div class="modal fade" id="Viewmodal" tabindex="-1" aria-hidden="true"style="margin-left:-250px!important">
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
 												<input type="text" id="id" name="id" class="form-control" placeholder="id-user">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="nama" class="form-label">Nama</label>
 												<input type="text" id="nama" name="nama" class="form-control" placeholder="nama lengkapmu">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="username" class="form-label">Username</label>
 												<input type="text" id="username" name="username" class="form-control" placeholder="username">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="email" class="form-label">Email</label>
 												<input type="email" id="email" name="email" class="form-control" placeholder="mail@gmail.com">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="jpassword" class="form-label ">Passsword</label>
 												<input type="password" id="password" name="password" class="form-control" placeholder="password">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="notelp" class="form-label">No Telepon</label>
 												<input type="number" id="notelp" name="notelp" class="form-control" placeholder="08781234567">
 												<div class="invalid-feedback"></div>
 											</div>
 										</div>
 										<div class="row g-2">
 											<div class="col mb-0">
 												<label for="alamat" class="form-label">Alamat</label>
 												<input type="text" id="alamat" name="alamat" class="form-control" placeholder="alamat">
 												<div class="invalid-feedback"></div>
 											</div>
 											<div class="col mb-0">
 												<label for="role" class="form-label">Role</label>
 												<select class="form-select " name="status">
 													<option value="" disabled selected hidden>Role</option>
 													<option value="admin">Admin</option>
 													<option value="user">User</option>
 												</select>
 												<div class="invalid-feedback"></div>
 											</div>
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
 	<script src="<?= base_url("public") ?>/assets/js/app-user.js"></script>
 	<!-- Main JS -->
 	<script src="<?= base_url("public") ?>/assets/js/main.js"></script>
