<!-- Left Sidebar -->
<div class="page-content">

<div class="container-fluid">

<!-- Awal Isi -->
<div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Berikut Adalah Daftar Jawaban dari Responden <?php echo $tes; ?></h5>
                                    <!-- <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p> -->
                                    <div class="table-container">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <!-- <th scope="col">Nama</th> -->
                                                    <th scope="col">Pertanyaan</th>
                                                    <th scope="col">Jawaban</th>
                                                    <th scope="col">Nilai</th>
                                                    <!-- <th scope="col">Aksi</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php $no=1; foreach ($listResponden as $row) { ?>
                                                <tr>
                                                    <th scope="row"><?= $no++; ?></th>
                                                    <!-- <td><?= $row->nama ?></td> -->
                                                    <td><?= $row->pertanyaan ?></td>
                                                    <td><?= $row->jawaban ?></td>
                                                    <td><?=  $row->nilai ?></td>
                                                  
                                                                                                      
                                                    <!-- <td><button type="button" href="google.com" class="btn btn-primary btn-xs waves-effect waves-light">Edit</button></td> -->
                                                </tr>
                                               <?php } ?>
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