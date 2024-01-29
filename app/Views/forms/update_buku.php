                <div class="main-panel">
                    <div class="content-wrapper">

                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="justify-content-end d-flex">
                                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                                <button class="btn btn-sm btn-light bg-white" type="button">
                                                    <i class="icon-globe"></i> <?php $date = new DateTime('now', new DateTimeZone('Asia/Jakarta')) ?> <?php echo  $date -> format('Y-m-d'); ?>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if (session() -> get('message')) { ?>

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Buku</strong> <?= session() -> getFlashdata('message') ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <?php } ?>

                        <form action="/Buku/update_buku/" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="ids" value="<?php echo $data_buku['id_buku'] ?>">
                            <input type="hidden" name="oldcover" value="<?php echo $data_buku['cover_buku'] ?>">
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" id="image-preview" src="<?= base_url('assets/images/'.($data_buku['cover_buku'] ? $data_buku['cover_buku'] : 'cinta-brontosaurus.png')) ?>">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="cover_buku" id="cover_upload">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-9 mt-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label for="judul_buku">Judul buku</label>
                                                    <input type="text" class="form-control form-control-sm" name="judul_buku" id="judul_buku" value="<?php echo $data_buku['judul_buku'] ?>">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="pengarang_buku">Pengarang buku</label>
                                                    <input type="text" class="form-control form-control-sm" name="pengarang_buku" id="pengarang_buku" value="<?php echo $data_buku['pengarang_buku'] ?>">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="kategori_buku">Kategori buku</label>
                                                    <select class="form-control" name="kategori_buku" id="kategori_buku">
                                                        <option disabled selected>Select Kategori</option>
                                                        <option disabled>----------------------------------------</option>

                                                        <?php foreach ($data_kategori as $data) { ?>

                                                            <option value="<?php echo $data['id_kategori'] ?>" <?php echo $data_buku['kategori_buku'] == $data['id_kategori'] ? 'selected' : '' ?>><?php echo ucwords($data['kategori']) ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="penerbit_buku">Penerbit buku</label>
                                                    <input type="text" class="form-control form-control-sm" name="penerbit_buku" id="penerbit_buku" value="<?php echo $data_buku['penerbit_buku'] ?>">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="Tahun_buku">Tahun buku</label>
                                                    <input type="text" class="form-control form-control-sm" name="tahun_buku" id="Tahun_buku" value="<?php echo $data_buku['tahun_buku'] ?>">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="tebal_buku">Tebal buku</label>
                                                    <input type="text" class="form-control form-control-sm" name="tebal_buku" id="tebal_buku" value="<?php echo $data_buku['tebal_buku'] ?>">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="source_buku">Source buku</label>
                                                    <input type="url" class="form-control form-control-sm" name="source_buku" id="source_buku" value="<?php echo $data_buku['source_buku'] ?>">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                                            <button type="reset" id="reset" class="btn btn-light">Cancel</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Ulasan Buku</h4>
                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label for="orientasi_buku">Orientasi buku</label>
                                                    <textarea class="form-control" name="orientasi_buku" id="orientasi_buku" rows="10" cols="30"><?php echo $data_buku['orientasi_buku'] ?></textarea>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="tafsiran_buku">Tafsiran buku</label>
                                                    <textarea class="form-control" name="tafsiran_buku" id="tafsiran_buku" rows="10" cols="30"><?php echo $data_buku['tafsiran_buku'] ?></textarea>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="evaluasi_buku">Evaluasi buku</label>
                                                    <textarea class="form-control" name="evaluasi_buku" id="evaluasi_buku" rows="10" cols="30"><?php echo $data_buku['evaluasi_buku'] ?></textarea>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="rangkuman_buku">Rangkuman buku</label>
                                                    <textarea class="form-control" name="rangkuman_buku" id="rangkuman_buku" rows="10" cols="30"><?php echo $data_buku['rangkuman_buku'] ?></textarea>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                        <script>

                            document.getElementById('cover_upload').onchange = function() {

                                document.getElementById('image-preview').src = URL.createObjectURL(cover_upload.files[0])
                            }

                            document.getElementById('reset').onclick = function() {

                                document.getElementById('image-preview').src = "<?= base_url('assets/images') ?>/cinta_brontosaurus.jpg";

                            }

                        </script>