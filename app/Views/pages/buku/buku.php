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

                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="card-title">Daftar Buku Tersedia</h4>
                                            <a href="/Buku/view_create_buku/">
                                                <button type="button" class="btn btn-link btn-sm"><i class="fas fa-bookmark mr-2"></i>Tambahkan Buku Baru</button>
                                            </a>
                                        </div>
                                        <div class="table-responsive">

                                            <table class="table table-striped">

                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th>No.</th>
                                                        <th>Cover Buku</th>
                                                        <th>Judul Buku</th>
                                                        <th>Informasi Umum</th>
                                                        <th>Source Buku</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php $no = 1;
                                                        foreach ($data_buku as $data) {
                                                            $created_date = new DateTime($data['BK_createdAt'], new DateTimeZone('Asia/Jakarta'));
                                                            $updated_date = new DateTime($data['BK_updatedAt'], new DateTimeZone('Asia/Jakarta'));
                                                    ?>
                                                        <tr style="text-align: center;">
                                                            <td><?php echo $no++ ?>.</td>
                                                            <td><img style="width: 135px; height: 200px; border-radius: 20px;" src="<?= base_url('assets/images/'.($data['cover_buku'] ? $data['cover_buku'] : 'default-profile.png')) ?>"></td>
                                                            <td><?php echo $data['judul_buku'] ? ucwords($data['judul_buku']) : 'Buku tidak ditemukan' ?></td>
                                                            <td>
                                                                <div style="text-align: left;">
                                                                    <p style="font-size: 13px;"><strong>Judul:</strong> <?php echo ucwords($data['judul_buku']) ?></p>
                                                                    <p style="font-size: 13px;"><strong>Pengarang:</strong> <?php echo ucwords($data['pengarang_buku']) ?></p>
                                                                    <p style="font-size: 13px;"><strong>Kategori:</strong> <?php echo ucwords($data['kategori']) ?></p>
                                                                    <p style="font-size: 13px;"><strong>Penerbit:</strong> <?php echo ucwords($data['penerbit_buku']) ?></p>
                                                                    <p style="font-size: 13px;"><strong>Tahun Terbit:</strong> <?php echo ucwords($data['tahun_buku']) ?></p>
                                                                    <p style="font-size: 13px;"><strong>Tebal Buku:</strong> <?php echo ucwords($data['tebal_buku']) ?> Halaman</p>
                                                                </div>
                                                            </td>
                                                                <?php
                                                                    if ($data['source_buku'] == NULL || '')
                                                                    {
                                                                ?>
                                                                    <td>Source buku ini tidak tersedia.</td>

                                                                <?php
                                                                    }
                                                                    else
                                                                    {
                                                                ?>

                                                                    <td><a href="<?php echo $data['source_buku'] ?>"><?php echo $data['source_buku'] ?></a></td>

                                                                <?php } ?>
                                                            <td>
                                                                <a href="<?= base_url('/Buku/delete_buku/'.$data['id_buku']) ?>">
                                                                    <button type="button" class="btn btn-link btn-sm"><i class="fas fa-trash-can" style="color: #ff0000"></i></button>
                                                                </a>
                                                                <a href="<?= base_url('/Buku/view_update_buku/'.$data['id_buku']) ?>">
                                                                    <button type="button" class="btn btn-link btn-sm"><i class="fas fa-square-pen" style="color: #f0ad4e"></i></button>
                                                                </a>
                                                                
                                                                <button type="button" class="btn btn-link btn-sm"
                                                                data-toggle="tooltip"
                                                                data-placement="right"
                                                                title="Ulasan Buku">
                                                                <i class="fas fa-book-open" style="color: #5bc0de"></i></button>

                                                                <button type="button" class="btn btn-link btn-sm btn-view"
                                                                data-toggle="modal"
                                                                data-target="#view_kategori_modals"
                                                                data-createdat="<?= $data['BK_createdAt'] ? $created_date -> format('l, j F Y, H:i:s A') : 'This data anonymously created' ?>"
                                                                data-updatedat="<?= $data['BK_updatedAt'] ? $updated_date -> format('l, j F Y, H:i:s A') : 'This data hasn\'t been updated' ?>">
                                                                <i class="fas fa-eye" style="color: #5bc0de"></i></button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Start - Modal View data -->

                            <div class="modal fade" id="view_kategori_modals" tabindex="-1" role="dialog" aria-labelledby="view_kategori_modals" aria-hidden="true">
                                <div class="modal-dialog" role="document">

                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="date-created"><i class="far fa-calendar mr-2"></i>Created Date</label>
                                                <input type="text" class="form-control" id="date-created" placeholder="Date Created" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="date-updated"><i class="far fa-calendar mr-2"></i>Updated Date</label>
                                                <input type="text" class="form-control" id="date-updated" placeholder="Date Updated" readonly>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-sm d-flex align-items-center" data-dismiss="modal"><i class="fas fa-xmark mr-2"></i>Cancel</button>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        <!-- End - Modal View data -->

                        <!-- Start - Custom Script -->
                        
                            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

                            <script>

                                $(document).ready(function () {
                                    $(document).on('click', '.btn-update', function() {
                                        $('#update_kategori_modals #id-kategori').val($(this).data('id'));
                                        $('#update_kategori_modals #nama-kategori').val($(this).data('kategori'));
                                    });
                                    $(document).on('click', '.btn-view', function() {
                                        $('#view_kategori_modals #date-created').val($(this).data('createdat'));
                                        $('#view_kategori_modals #date-updated').val($(this).data('updatedat'));
                                    });
                                    $(document).on('click', '#btn-close', function() {
                                        $('#nama-kategori').val('');
                                    });
                                });

                            </script>

                        <!-- End - Custom Script -->