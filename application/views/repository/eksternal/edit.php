<div id="layoutSidenav_content">
                <main>

                    <div class="container-fluid px-4">
                        <div class="card mb-4 mt-3">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h6 class="m-0"><i class="fas fa-table me-1"></i> Edit File Eksternal</h6>
							</div>

							<div class="card-body">
								<form action="" method="post" enctype="multipart/form-data" >
									<div class="row">
										<div class="col">
										<input class="form-control" type="hidden" id="id" name="id" value="<?= $eksternal->id ?>"/>
										<input class="form-control" type="hidden" id="old_file" name="old_file" value="<?= $eksternal->file ?>"/>
											<div class="form-group">
												<label for="kegiatan">Kegiatan</label>
												<input class="form-control <?= form_error('kegiatan') ? 'is-invalid':'' ?>" type="text" id="kegiatan" name="kegiatan" placeholder="Kegiatan" value="<?= $eksternal->kegiatan ?>"/>
												<div class="invalid-feedback">
													<?= form_error('kegiatan') ?>
												</div>
											</div>
											<div class="form-group">
												<label for="tema">Tema</label>
												<input class="form-control <?= form_error('tema') ? 'is-invalid':'' ?>" type="text" id="tema" name="tema" placeholder="Tema" value="<?= $eksternal->tema ?>"/>
												<div class="invalid-feedback">
													<?= form_error('tema') ?>
												</div>
											</div>
											<div class="form-group">
												<label for="tempat">Tempat</label>
												<input class="form-control <?= form_error('tempat') ? 'is-invalid':'' ?>" type="text" id="tempat" name="tempat" placeholder="Tempat" value="<?= $eksternal->tempat ?>"/>
												<div class="invalid-feedback">
													<?= form_error('tempat') ?>
												</div>
											</div>
											<div class="form-group">
												<label for="tanggal">Tanggal</label>
												<input class="form-control <?= form_error('tanggal') ? 'is-invalid':'' ?>" type="date" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?= $eksternal->tanggal ?>"/>
												<div class="invalid-feedback">
													<?= form_error('tanggal') ?>
												</div>
											</div>
											<div class="form-group">
												<label for="file">File</label>
												<input class="form-control <?= form_error('file') ? 'is-invalid':'' ?>" type="file" id="file" name="file" placeholder="File"/>
												<div class="invalid-feedback">
													<?= form_error('file') ?>
												</div>
											</div>
										</div>
									</div>
									<button class="btn btn-primary mt-3 btn-block" type="submit" name="btn">Edit File</button>
								</form>	
                        </div>
                    </div>
                </main>
            </div>
        </div>
