<?php $this->load->view('leyout/header'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah User
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="<?php echo site_url('user/insert_aksi') ?>"
                            	method="POST"> 
                            	<input type="hidden" name="id_user" 
                            			value="<?php 
                                        if (isset($komentar->id_komentar))
                                        {
                                        	echo $komentar->id_komentar;
                                        } 
                                        ?>">
                            	<label for="email_address">Nama User</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" name="nama_user" class="form-control" placeholder="Enter your Name"
                                        value="<?php 
                                        if (isset($komentar->nama))
                                        {
                                        	echo $komentar->nama;
                                        } 
                                        ?>">

                                    </div>
                                </div>
                                <label for="email_address">Email User</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" name="email_user" class="form-control" placeholder="Enter your email address"value="<?php 
                                        if (isset($user->email))
                                        {
                                        	echo $user->email;
                                        } 
                                        ?>">
                                    </div>
                                </div>
                                <label for="password">Password User</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="password" name="password_user" class="form-control" placeholder="Enter your password"
                                        value="<?php 
                                        if (isset($user->pesan))
                                        {
                                        	echo $user->pesan;
                                        } 
                                        ?>">
                                    </div>
                                </div>
                                <input type="checkbox" id="remember_me" class="filled-in">
                                <label for="remember_me">Remember Me</label>
                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Tambah Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
 <?php $this->load->view('leyout/footer'); ?>