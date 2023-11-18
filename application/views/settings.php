 <!-- Content wrapper -->
 <div class="content-wrapper">

 	<!-- Content -->

 	<div class="container-xxl flex-grow-1 container-p-y">


 		<h4 class="py-3 mb-4">
 			<span class="text-muted fw-light">Profil Saya /</span> Pengaturan
 		</h4>

 		<div class="row">
 			<div class="col-md-12">
 				<ul class="nav nav-pills flex-column flex-md-row mb-4">
 					<li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ti-xs ti ti-users me-1"></i> Detail Profil</a></li>
 					<li class="nav-item"><a class="nav-link" href="#/settings/changepw"><i class="ti-xs ti ti-lock me-1"></i> Ubah Password</a></li>
 				</ul>
 				<div class="card mb-4">
 					<h5 class="card-header">Detail Profil</h5>
 					<!-- Account -->
 					<div class="card-body">
 						<div class="d-flex align-items-start align-items-sm-center gap-4">
 							<i class="ti-xl ti ti-user-circle " style="font-size:100px!important;margin:25px;"></i>
 							<div class="button-wrapper">
 								<label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
 									<span class="d-none d-sm-block">Pilih Foto</span>
 									<i class="ti ti-upload d-block d-sm-none"></i>
 									<input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
 								</label>
 								<button type="button" class="btn btn-label-secondary account-image-reset mb-3">
 									<i class="ti ti-refresh-dot d-block d-sm-none"></i>
 									<span class="d-none d-sm-block">Batal</span>
 								</button>

 								<div class="text-muted">Allowed JPG, GIF or PNG. Max size of 800K</div>
 							</div>
 						</div>
 					</div>
 					<div class="card-body" style="border-top:.1rem solid gray">
 						<form id="formAccountSettings" method="POST" onsubmit="return false" style="margin-top:25px;">
 							<div class="row">
 								<div class="mb-3 col-md-6">
 									<label for="namalengkap" class="form-label">Nama Lengkap</label>
 									<input class="form-control" type="text" id="namalengkap" name="namalengkap" placeholder="namamu" autofocus />
 								</div>
 								<div class="mb-3 col-md-6">
 									<label for="alamat" class="form-label">Alamat</label>
 									<input class="form-control" type="text" name="alamat" id="alamat" placeholder="alamatmu" />
 								</div>
 								<div class="mb-3 col-md-6">
 									<label for="email" class="form-label">Email</label>
 									<input class="form-control" type="text" id="email" name="email" placeholder="example@example.com" />
 								</div>
 								<div class="mb-3 col-md-6">
 									<label for="nohp" class="form-label">Nomor HP</label><br>
 									<div class="input-group">
 										<span class="input-group-text">+62</span>
 										<input type="number" class="form-control" placeholder="Nomor HP" name="nohp" id="nohp">
 									</div>
 								</div>
 							</div>
 							<div class="mt-2">
 								<button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
 								<button type="reset" class="btn btn-label-secondary">Cancel</button>
 							</div>
 						</form>
 					</div>
 				</div>
 			</div>


 		</div>
 		<!-- / Content -->
