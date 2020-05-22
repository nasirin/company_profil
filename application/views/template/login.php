<!-- LOGIN -->
<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="<?= site_url('auth/login')?>" method="post">
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" id="Email" name="email" class="form-control" placeholder="Masukan Email..">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Masukan password...">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <a href="#daftar" data-toggle="modal" class="btn btn-secondary" data-dismiss="modal">Sign Up</a>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- DAFTAR -->
<div class="modal fade" id="daftar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="<?= site_url('auth/daftar')?>" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama lengkap">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Masukan Email..">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukan password min 6...">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat..."></textarea>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>