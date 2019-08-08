<?php $this->load->view('leyout/header'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>User</h2>               
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                           <!--  <h2>
                                Data User
                                <a href="<?php echo site_url('user/insert'); ?>" class="btn btn-primary pull-right">Tambah Data</a>
                            </h2> -->
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>E-Mail</th>
                                            <th>Password</th>
                                            <th>Nama Anak</th>
                                            <th>Tangal Lahir Anak</th>
                                            <th>Berat Anak</th>
                                            <th>Tinggi Anak</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    	foreach ($user as $key => $value) {
                                    		?>
                                       <tr>
                                       	<td><?php echo $key+1; ?></td>
                                       	<td><?php echo $value->nama_user; ?></td>
                                       	<td><?php echo $value->email; ?></td>
                                       	<td><?php echo $value->password; ?></td>
                                        <td><?php echo $value->nama_anak; ?></td>
                                        <td><?php echo $value->tgl; ?></td>
                                        <td><?php echo $value->berat; ?></td>
                                        <td><?php echo $value->tinggi; ?></td>
                                        <td><?php echo $value->jk; ?></td>
                                       	<td>
                                       		<a href="<?php echo site_url('user/update/'.$value->id_user) ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?php echo site_url('user/delete/'.$value->id_user) ?>" onClick=" return confirm('Yakin ingin dihapus?')" class="btn btn-danger">Delete</a>

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
            <!-- #END# Basic Examples -->
        </div>
    </section>
 <?php $this->load->view('leyout/footer'); ?>
 <script type="text/javascript">
 	$(function () {
 		$('.js-basic-example').DataTable({
 			responsive: true
 		});
 	})
 </script>
