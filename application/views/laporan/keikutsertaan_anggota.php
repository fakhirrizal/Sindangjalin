                    <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Rekap Data
                        <small>Keikutsertaan Anggota</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                   
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="portlet red-pink box">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-users"></i> Anggota Dewan </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="expand" data-original-title="" title=""> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body" style="display: none;">
                                    <div id="tree_4" class="tree-demo jstree jstree-4 jstree-default" role="tree" aria-multiselectable="true" tabindex="0" aria-activedescendant="node_151937283487687" aria-busy="false">
                                        <ul class="jstree-container-ul jstree-children" role="group">
                                            
                                            <li role="treeitem" aria-selected="false" aria-level="1" aria-labelledby="node_151937201536411_anchor" aria-expanded="true" id="node_151937201536411" class="jstree-node jstree-open" aria-busy="false"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="node_151937201536411_anchor"><i class="jstree-icon jstree-themeicon icon-grid icon-lg icon-state-danger jstree-themeicon-custom" role="presentation"></i> Daftar Anggota</a>
                                                <ul role="group" class="jstree-children" style="">
                                                    <?php
                                                    foreach ($data_keikutsertaan as $key => $value) {
                                                        if($value->keterangan=='anggota legislatif'){
                                                    ?>
                                                    <li role="treeitem" aria-selected="false" aria-level="2" aria-labelledby="node_15193728348521_anchor" aria-expanded="false" id="node_15193728348521" class="jstree-node  jstree-closed"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="<?php echo site_url('Laporan/keikutsertaan_detail/'.$value->id)?>" tabindex="-1" id="node_15193728348521_anchor"><i class="jstree-icon jstree-themeicon icon-notebook icon-lg icon-state-success jstree-themeicon-custom" role="presentation"></i> <?= $value->nama.' ('.$value->jabatan.'), '.$value->jumlah_jaldis.'x Perjalanan Dinas.'; ?></a></li>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet red-pink box">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-users"></i> Sekretariat Dewan </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="expand" data-original-title="" title=""> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body" style="display: none;">
                                    <div id="tree_4" class="tree-demo jstree jstree-4 jstree-default" role="tree" aria-multiselectable="true" tabindex="0" aria-activedescendant="node_151937283487687" aria-busy="false">
                                        <ul class="jstree-container-ul jstree-children" role="group">
                                            
                                            <li role="treeitem" aria-selected="false" aria-level="1" aria-labelledby="node_151937201536411_anchor" aria-expanded="true" id="node_151937201536411" class="jstree-node jstree-open" aria-busy="false"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="node_151937201536411_anchor"><i class="jstree-icon jstree-themeicon icon-grid icon-lg icon-state-danger jstree-themeicon-custom" role="presentation"></i> Daftar Anggota</a>
                                                
                                                <ul role="group" class="jstree-children" style="">
                                                    <?php
                                                    foreach ($data_keikutsertaan as $key => $value) {
                                                        if($value->keterangan=='bukan anggota legislatif'){
                                                    ?>
                                                    <li role="treeitem" aria-selected="false" aria-level="2" aria-labelledby="node_151937283571229_anchor" aria-expanded="false" id="node_151937283571229" class="jstree-node  jstree-closed"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="node_151937283571229_anchor"><i class="jstree-icon jstree-themeicon icon-notebook icon-lg icon-state-warning jstree-themeicon-custom" role="presentation"></i> <?= $value->nama.' ('.$value->jabatan.'), '.$value->jumlah_jaldis.'x Perjalanan Dinas.'; ?></a></li>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-12">
                                        <div class="tabbable">
                                            <ul class="nav nav-tabs" id="myTab">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#dewan">
                                                        <i class="green ace-icon fa fa-users"></i>
                                                        Anggota Dewan
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#setwan">
                                                        Sekretariat Dewan
                                                        <i class="green ace-icon fa fa-users"></i>
                                                    </a>
                                                </li>
                                               
                                            </ul>

                                            <div class="tab-content">
                                                <div id="dewan" class="tab-pane fade in active">
                                                    <p style="color: red">* Catatan : Tombol dibawah ini berguna untuk mencetak daftar anggota beserta jumlah keikutsertaannya, dengan keluaran file yang berekstensi .xls</p>
                                                        <div class="btn-group">
                                                                <a class="btn green-haze btn-outline btn-circle btn-sm" href="rekap_dewan"> Cetak Data
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                               
                                                        </div>
                                                        <br/>
                                                        <br/>
                                                    <table class="table table-bordered table-striped" id="tabel1">
                                                        <thead>
                                                          <tr>
                                                            <th style="text-align: center">#</th>
                                                            <th style="text-align: center">Nama Lengkap</th>
                                                            <th style="text-align: center">Jabatan</th>
                                                            <th style="text-align: center">Keikutsertaan</th>
                                                            <th style="text-align: center">Aksi</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                      
                                                            <?php
                                                            $no=1;
                                                            foreach ($data_keikutsertaan as $key => $value) {
                                                            if($value->keterangan=='anggota legislatif'){
                                                            ?>
                                                            <tr class="gradeX">
                                                                <td style="text-align: center"><?= $no++."."; ?></td>
                                                                <td><?= $value->nama; ?></td>
                                                                <td><?= $value->jabatan; ?></td>
                                                                <td><?= $value->jumlah_jaldis.' kali.'; ?></td>
                                                                <td style="text-align: center">
                                                                <a href="<?= base_url('Laporan/keikutsertaan_detail/'.$value->id) ?>" class="btn btn-mini" title="lihat detail"><i class="fa fa-binoculars"></i></a>      
                                                                </td>
                                                            </tr>
                                                            <?php
                                                                }
                                                              }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="setwan" class="tab-pane fade">
                                                        
                                                        <p style="color: red">* Catatan : Tombol dibawah ini berguna untuk mencetak daftar anggota beserta jumlah keikutsertaannya, dengan keluaran file yang berekstensi .xls</p>
                                                        <div class="btn-group">
                                                                <a class="btn green-haze btn-outline btn-circle btn-sm" href="rekap_setwan"> Cetak Data
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                               
                                                        </div>
                                                        <br/>
                                                        <br/>
                                                        <table class="table table-bordered table-striped" id="tabel2">
                                                        <thead>
                                                          <tr>
                                                            <th style="text-align: center">#</th>
                                                            <th style="text-align: center">Nama Lengkap</th>
                                                            <th style="text-align: center">Jabatan</th>
                                                            <th style="text-align: center">Keikutsertaan</th>
                                                            <th style="text-align: center">Aksi</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                      
                                                            <?php
                                                            $no=1;
                                                            foreach ($data_keikutsertaan as $key => $value) {
                                                            if($value->keterangan=='bukan anggota legislatif'){
                                                            ?>
                                                            <tr class="gradeX">
                                                                <td style="text-align: center"><?= $no++."."; ?></td>
                                                                <td><?= $value->nama; ?></td>
                                                                <td><?= $value->jabatan; ?></td>
                                                                <td><?= $value->jumlah_jaldis.' kali.'; ?></td>
                                                                <td style="text-align: center">
                                                                <a href="<?= base_url('Laporan/keikutsertaan_detail/'.$value->id) ?>" class="btn btn-mini" title="lihat detail"><i class="fa fa-binoculars"></i></a>      
                                                                </td>
                                                            </tr>
                                                            <?php
                                                                }
                                                              }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                        
                                                </div>
                                            </div>
                                        </div>
                        </div>
                    </div>

      <script>
      $(function () {
        $("#tabel1").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
      </script>
      <script>
      $(function () {
        $("#tabel2").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
      </script>