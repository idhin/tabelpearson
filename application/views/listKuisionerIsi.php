<!-- Left Sidebar -->
<div class="page-content">

<div class="container-fluid">

<!-- Awal Isi -->
<div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Berikut List Kuisioner yang Pernah Anda Buat</h5>
                                    <!-- <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p> -->
                                    <div class="table-container">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No </th>
                                                    <th scope="col">Pertanyaan</th>
                                                    <th scope="col">Jawaban A</th>
                                                    <th scope="col">Jawaban B</th>
                                                    <th scope="col">Jawaban C</th>
                                                    <th scope="col">Jawaban D</th>

                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no=1; foreach ($listKuisioner as $row) { ?>
                                                <tr>
                                                    <th scope="row"><?= $no++; ?></th>
      
                                                    <td><?= $row->pertanyaan ?></td>
                                                    <td><?= $row->jawabanA ?></td>
                                                    <td><?= $row->jawabanB ?></td>
                                                    <td><?= $row->jawabanC ?></td>
                                                    <td><?= $row->jawabanD ?></td>
                                        
                                                    <td><a href="<?= base_url();?>kuisioner/editKuisioner/<?= $row->id ?>" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Edit</a>
                                                    <a href="<?= base_url();?>kuisioner/hapusIsiKuisioner/<?= $row->id ?>" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Hapus</a></td>
                                                    
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
</div>
    </div>
</div>

</div>