<!-- Left Sidebar -->
<div class="page-content">

<div class="container-fluid">

<!-- Awal Isi -->
<div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Berikut Daftar Kuisioner yang Pernah Anda Buat</h5>
                                    <!-- <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p> -->
                                    <div class="table-container">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Judul</th>
                                                    <th scope="col">Deskripsi</th>
                                                    <th scope="col">Link</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if($totalKusioner < 1 ){
                                               echo "<tr>
                                               <th></th>
                                               <th></th>
                                               <th>Anda Belum membuat kuisioner</th>
                                                <th></th>
                                                <th></th>
                                                </tr>";
                                            }else{ ?>

                                            
                                               <?php $no=1; foreach ($listKuisioner as $row) { ?>
                                                <tr>
                                                    <th scope="row"><?= $no++; ?></th>
                                                    <td><?= $row->judul_kuisioner ?></td>
                                                 
                                                    <td><?= $row->deskripsi ?></td>
                                                    <td><?= base_url(); ?>user/share/<?=  $row->id ?></td>
                                                    <td><?php echo $status[$no-1] ?></td>
                                                    <td><a href="<?= base_url();?>kuisioner/lihatKuisioner/<?= $row->id ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Detail</a>
                                                    
                                                    <a href="<?=  base_url();?>kuisioner/lihatNamaResponden/<?= $row->id ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Lihat Responden</a>
                                                    
                                                    <!-- <a href="<?=  base_url();?>kuisioner/lihatHasil/<?= $row->id ?>" class="btn btn-info btn-sm active" role="button" aria-pressed="true">Lihat Hasil</a> -->
                                                    <a href="<?=  base_url();?>kuisioner/lihatPearson/<?= $row->id ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Pearson</a>
                                                    <a href="<?=  base_url();?>kuisioner/hapus/<?= $row->id ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Hapus</a>
                                                    </td>                                              
                                                    <!-- <td><button type="button" href="google.com" class="btn btn-primary btn-xs waves-effect waves-light">Edit</button></td> -->
                                                </tr>
                                               <?php } }?>
                                            </tbody>
                                        </table>       
                                    </div>
                                </div>
                            </div>

                                        
<!-- 
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" style="display: none;">Example select</label>
                                            <select class="form-control custom-select" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2" style="display: none;">Example multiple select</label>
                                            <select multiple="" class="form-control custom-select" id="exampleFormControlSelect2">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div> -->
                                        
                                    </form>
                                </div>
                            </div>


                            <!-- Akhir Isi -->
</div>

</div>