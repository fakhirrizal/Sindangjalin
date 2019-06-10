                                            <?php
                                            $id_komisi = '';
                                            foreach ($datakomisi as $key => $row) {
                                            $id_komisi = $row->id_komisi;
                                            ?>
                                            <input type="hidden" name="id" value="<?= $id_komisi; ?>">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="komisi" class="form-control" maxlength="200" value="<?= $row->nama_komisi; ?>">
                                                          
                                                            <span class="help-block">Nama Komisi.</span>
                                                            <i class="icon-pin"></i>
                                                        </div>
                                            </div>
                                            <br>
                                            <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            
                                                            <textarea name="keterangan" required class="form-control" maxlength="1000" rows="3"><?= $row->keterangan; ?></textarea>
                                                            <span class="help-block">Keterangan.</span>
                                                            <i class="icon-directions"></i>
                                                        </div>
                                            </div>
                                            <?php } ?>
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
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($data_anggota as $key => $value) {
                                                    $cek = $value->id_komisi;
                                                    ?>
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="anggota<?= $value->id; ?>" name="nama[]" value="<?= $value->id; ?>" <?php if($cek==$id_komisi){echo 'checked';}else{echo '';} ?> class="md-check">
                                                            <label for="anggota<?= $value->id; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value->nama; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="box-footer">

                                                                        <div class="form-actions noborder">
                                                                            <button type="submit" class="btn blue">Update</button>
                                                                            <button type="reset" class="btn default">Reset</button>
                                                                        </div>
                                            </div>