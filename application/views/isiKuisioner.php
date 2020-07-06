                    <div class="card">
                                <div class="card-body">
                                    
                                    <h5 class="card-title">Kuisioner</h5>
                                    <p>The <code>.form-group</code> class is the easiest way to add some structure to forms. It provides a flexible class that encourages proper grouping of labels, controls, optional help text, and form validation messaging.</p>
                                    <?= form_open('user/jawab') ?>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="namaLengkap" placeholder="Nama lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="">Email</label>
                                            <input type="email" class="form-control" id="formGroupExampleInput2" name="email" placeholder="Email">
                                        </div>
                                        <?php foreach ($pertanyaan as $s) { ?>

                                        <div class="form-group">
                                            <h3><?= $s->pertanyaan; ?> </h3>
                                            <input type="hidden" name="pertanyaan<?=$s->id?>" value="<?=$s->pertanyaan?>">
                                            <input type="hidden" name="idPertanyaan" value="<?= $this->uri->segment(3)?>">
                                            <input type="hidden" name="idUser" value="<?= $s->idUser ?>">
                                            <input type="hidden" name="bobotA<?= $s->id ?>" value="<?= $s->bobotA ?>">
                                            <input type="hidden" name="bobotB<?= $s->id ?>" value="<?= $s->bobotB ?>">
                                            <input type="hidden" name="bobotC<?= $s->id ?>" value="<?= $s->bobotC ?>">
                                            <input type="hidden" name="bobotD<?= $s->id ?>" value="<?= $s->bobotD ?>">
                                        </div>

                                        <input type="radio" id="jawabanA" name="jawaban<?= $s->id ?>" value="<?= $s->bobotA ?>">
                                        <label for="male"><?= $s->jawabanA; ?>  </label><br>
                                        <input type="radio" id="jawabanB" name="jawaban<?= $s->id ?>" value="<?= $s->bobotB ?>">
                                        <label for="female"><?= $s->jawabanB; ?> </label><br>
                                        <input type="radio" id="jawabanC" name="jawaban<?= $s->id ?>" value="<?= $s->bobotC ?>">
                                        <label for="other"><?= $s->jawabanC; ?></label><br>
                                        <input type="radio" id="jawabanD" name="jawaban<?= $s->id ?>" value="<?=    $s->bobotD ?>">
                                        <label for="other"><?= $s->jawabanD; ?></label>
                                        
                                        <br><br>    
                                    <? }  ?>
                                        <button type="submit" class="btn btn-primary rounded-pill waves-effect waves-light">Submit</button>
                                        
                                    <?= form_close(); ?>
                                </div>
                            </div>


    