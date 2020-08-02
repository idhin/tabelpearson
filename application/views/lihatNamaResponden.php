><!-- Left Sidebar -->
<div class="page-content">

<div class="container-fluid">

<!-- Awal Isi -->
<div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Berikut Adalah Daftar Responden Pada Kuisioner <?php echo $judul->judul_kuisioner; ?> </h5>
                                    <div class="table-container">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Aksi</th>
                                                   
                                                    <!-- <th scope="col">Aksi</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(count($listNamaResponden) == 0){
                                                echo "<tr><td>Belum Ada Tanggapan Responden</td></tr>";
                                            }else{
                                                ?>
                                          
                                               <?php $no=1; foreach ($listNamaResponden as $row) { ?>
                                                <tr>
                                                    <th scope="row"><?= $no++; ?></th>
                                                    <td><?= $row->nama ?></td>
                                                    <td><a href="<?=  base_url();?>/kuisioner/lihatResponden/<?= $row->orangKe?>/<?= $this->uri->segment(3)?>" class="btn btn-secondary btn-sm active waves-effect waves-light" role="button" aria-pressed="true">Lihat Jawaban</a></td>
                                                   
                                                  
                                                                                                      
                                                    <!-- <td><button type="button" href="google.com" class="btn btn-primary btn-xs waves-effect waves-light">Edit</button></td> -->
                                                </tr>
                                               <?php }  } ?>
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