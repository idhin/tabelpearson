<!-- Left Sidebar -->
<div class="page-content">

<div class="container-fluid">

<!-- Awal Isi -->
<div class="card">
                                <div class="card-body">
                                <div class="row">
                                        <div class="col-8">
                                        <h5 class="card-title">Tabel Pearson dari kuisioner <?php echo $judul->judul_kuisioner;?></h5>
                                        </div>
                                        
                                        <div class="col-4">
                                            
                                            <button class="btn btn-primary" style="float:right" onclick="window.location='http://[::1]/tabelpearson/kuisioner/hitungP/<?php echo $id; ?>';">Kalkulasi Pearson</button>
                                        </div>       
                                                                          
                                    </div>
                                    
                                    <!-- <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p> -->
                                    <div class="table-container">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Pertanyaan</th>
                                                    <th scope="col">R Hitung</th>
                                                    <th scope="col">R Tabel</th>
                                                    <th scope="col">Validitas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(count($listPearson) == 0){
                                                
                                                echo "<td>Tabel Pearson Belum Di Kalkulasi</td>";
                                                }else{

                                                $no=1; foreach ($listPearson as $row) { ?>

                                                <tr>
                                                    <th scope="row"><?php echo $no++; ?></th>
                                                    <td>Pertanyaan ke-<?php echo $row->idPertanyaan; ?></td>
                                                 
                                                    <td><?php echo $row->thitung; ?></td>
                                                    <td><?php echo $row->rtable ?></td>
                                                    <td><?php echo $row->status ?></td>                                              
                                                    <!-- <td><button type="button" href="google.com" class="btn btn-primary btn-xs waves-effect waves-light">Edit</button></td> -->
                                                </tr>
                                               <?php } } ?>
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