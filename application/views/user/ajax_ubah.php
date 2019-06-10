
														<form role="form" action="<?php echo site_url('User/ubah_pekerjaan'); ?>" method="post">
                                                        <?php
														foreach ($data_pekerjaan as $key => $value) {
														?>
                                                            <div class="form-group">
                                                                <label class="control-label">Nama Perusahaan</label>
                                                                <div class="input-icon">
                                                                <i class="fa fa-university"></i>
                                                                <input type="hidden" name="id" value="<?php echo $value->id; ?>"/>
                                                                <input type="text" name="perusahaan" class="form-control" value="<?php echo $value->perusahaan; ?>" required/> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Jabatan</label>
                                                                <div class="input-icon">
                                                                <i class="fa fa-university"></i>
                                                                <input type="text" name="jabatan" class="form-control" value="<?php echo $value->jabatan; ?>" required/> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Tahun</label>
                                                                <div class="input-icon">
                                                                <i class="fa fa-university"></i>
                                                                <input type="text" name="tahun" class="form-control" value="<?php echo $value->tahun; ?>" required/> </div>
                                                            </div>
                                                            
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn green"> Save Changes </button>
                                                                <button type="reset" class="btn default"> Reset </button>
                                                            </div>
                                                        <?php } ?>
                                                        </form>