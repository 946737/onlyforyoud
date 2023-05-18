<section id="page-account-settings">
    <div class="row">
        <div class="col-md-3 mb-2 mb-md-0">
            <ul class="nav nav-pills flex-column nav-left">
                <li class="nav-item">
                    <a class="nav-link active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                        <i data-feather="user" class="font-medium-3 mr-1"></i>
                        <span class="font-weight-bold">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                        <i data-feather="lock" class="font-medium-3 mr-1"></i>
                        <span class="font-weight-bold">Ubah Password</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="account-pill-api" data-toggle="pill" href="#account-vertical-api" aria-expanded="false">
                        <i data-feather="code" class="font-medium-3 mr-1"></i>
                        <span class="font-weight-bold">API Setting</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                            <div class="media">
                                <a href="javascript:void(0);" class="mr-25">
                                    <img src="<?= gravatar($_SESSION['user']['email']) ?>" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                </a>
                                <div class="media-body mt-75 ml-1">
                                    <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75" onclick="javascript:window.open('https://en.gravatar.com/emails/');">Ubah Avatar</label>
                                    <button class="btn btn-sm btn-outline-secondary mb-75" disabled>{ }</button>
                                    <p>Selalu waspada! Ikuti pertokol kesehatan.</p>
                                </div>
                            </div>
                            <form class="validate-form mt-2" method="POST">
                                <input type="hidden" id="csrf_token" name="csrf_token" value="<?= csrf_token() ?>" />
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="full_name" value="<?= e($_SESSION['user']['name']) ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Pemakaian</label>
                                            <input type="text" class="form-control" value="Rp <?= number_format(e($_SESSION['user']['pemakaian'],0,',','.')) ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="<?= e($_SESSION['user']['email']) ?>" disabled />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="save_general" class="btn btn-relief-primary mt-2 mr-1 btn-page-block-overlay">Submit</button>
                                        <button type="reset" class="btn btn-relief-secondary mt-2">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                            <form class="validate-form" method="POST">
                                <input type="hidden" id="csrf_token" name="csrf_token" value="<?= csrf_token() ?>" />
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Password Baru</label>
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" name="new-password" class="form-control" placeholder="" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text cursor-pointer">
                                                        <i data-feather="eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Konfirmasi Password Baru</label>
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" class="form-control" name="confirm-new-password" placeholder="" />
                                                <div class="input-group-append">
                                                    <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Konfirmasi Password Lama</label>
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" class="form-control" name="password" required />
                                                <div class="input-group-append">
                                                    <div class="input-group-text cursor-pointer">
                                                        <i data-feather="eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="save_password" class="btn btn-relief-primary mr-1 mt-1 btn-page-block-overlay">Submit</button>
                                        <button type="reset" class="btn btn-relief-secondary mt-1">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="account-vertical-api" role="tabpanel" aria-labelledby="account-pill-api" aria-expanded="false">
                            <form method="POST">
                                <input type="hidden" id="csrf_token" name="csrf_token" value="<?= csrf_token() ?>" />
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Status API</label>
                                            <select class="form-control" name="api_status">
                                                <option value="ON" <?= $data_user['api_status'] == 'ON' ? 'selected' : '' ?>>ON | AKTIF</option>
                                                <option value="OFF" <?= $data_user['api_status'] == 'OFF' ? 'selected' : '' ?>>OFF | NOAKTIF</option>
                       
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>API Key</label>
                                            <div class="input-group">
                                                <input class="form-control" value="<?= $data_user['api_key'] ?>" disabled />
                                                <div class="input-group-append">
                                                    <button type="submit" name="update_apikey" class="btn btn-relief-primary waves-effect waves-light btn-page-block-overlay">
                                                        <i class="fas fa-random"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>IP Static</label>
                                                <input class="form-control" name="ip" value="<?= $data_user['ip_static'] ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Konfirmasi Password</label>
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input
                                                    type="password"
                                                    class="form-control"
                                                    name="pin"
                                                    onkeyup="this.value=this.value.replace(/[^\d]+/g,'')"
                                                    placeholder=""
                                                    data-validation-required-message="This phone field is required"
                                                />
                                                <div class="input-group-append">
                                                    <div class="input-group-text cursor-pointer">
                                                        <i data-feather="eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="u_api" class="btn btn-relief-primary mr-1 mt-1 btn-page-block-overlay">Submit</button>
                                        <button type="reset" class="btn btn-relief-secondary mt-1">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
