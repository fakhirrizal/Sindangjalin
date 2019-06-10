
														<form role="form" action="<?php echo site_url('User/ubah_pendidikan'); ?>" method="post">
                                                        <?php
														foreach ($data_pendidikan as $key => $value) {
														?>
                                                            <div class="form-group">
                                                                <label class="control-label">Jenjang</label>
                                                                <div class="input-icon">
                                                                <i class="fa fa-university"></i>
                                                                <input type="hidden" name="id" value="<?php echo $value->id; ?>"/>
                                                                <input type="text" name="jenjang" class="form-control" value="<?php echo $value->jenjang; ?>" required/> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Nama Instansi</label>
                                                                <div class="input-icon">
                                                                <i class="fa fa-university"></i>
                                                                <input type="text" name="instansi" class="form-control" value="<?php echo $value->instansi; ?>" required/> </div>
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