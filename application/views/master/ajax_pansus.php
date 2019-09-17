                                            <?php
                                            foreach ($data_pansus as $key => $value) {
                                            ?>
                                            <input type="hidden" name="id" value="<?= $value->kode_pansus; ?>">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="nama_pansus" class="form-control" maxlength="200" value="<?= $value->nama_pansus; ?>" required>
                                                            <span class="help-block">Nama Pansus</span>
                                                            <i class="icon-pin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            
                                                            <textarea name="perihal" required class="form-control" maxlength="1000" rows="3"><?= $value->perihal; ?></textarea>
                                                            <span class="help-block">Perihal kenapa dibentuknya Pansus.</span>
                                                            <i class="icon-directions"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                                                                    
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <input type="date" value="<?= $value->awal_periode; ?>" class="form-control edited" name="awal_periode">
                                                                                                <label for="form_control_1">Start Date</label>
                                                                                                <span class="help-block"></span>
                                                                                                <i class="icon-calendar"></i>
                                                                                            </div>
                                                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <input type="date" class="form-control edited" value="<?= $value->akhir_periode; ?>" name="akhir_periode">
                                                                                                <label for="form_control_1">End Date</label>
                                                                                                <span class="help-block"></span>
                                                                                                <i class="icon-calendar"></i>
                                                                                            </div>
                                                                                        </div>
                                                </div>
                                            </div>  
                                            <br>                                     
                                            <div class="form-group form-md-checkboxes">
                                            
                                                <label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;List Anggota</label>
                                                <div class="form-group form-md-checkboxes">
                                         
                                                    <div class="col-md-12">
                                                        <div class="md-checkbox-inline">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="md-checkbox">
                                                                <input type="checkbox" id="selectall" onClick="selectAll(this)" class="md-check">
                                                                <label for="selectall">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Select All </label>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <?php } ?>       
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($data_anggota as $key => $value) {
                                                   
                                                    ?>
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="anggota<?= $value->id; ?>" name="nama[]" value="<?= $value->id.'_'.$value->status_pansus.'_'.$value->jabatan_pansus; ?>" <?php if(!empty($value->status_pansus)){echo 'checked';}else{echo '';} ?> class="md-check">
                                                            <label for="anggota<?= $value->id; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value->nama; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                                                                                                             
                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Perbarui</button>
                                            <button type="reset" class="btn default">Batal</button>
                                        </div>