<?= view('admin/includes/header', ['title' => $nav_heading,'nav_heading'=>$nav_heading]) ?>



        <div class="content-body">

            <div class="container-fluid">

                <div class="d-flex align-items-center mb-4 flex-wrap">

                    <h3 class="me-auto"> <?=$nav_heading ?></h3>

                    <div>

                        <!-- <a href="<?=base_url()?>admin/add-candidate" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Add New Candidate</a> -->

                    </div>

                </div>

                <div class="row">

                    <div class="col-xl-12">

                        <div class="table-responsive">

                            <div id="example5_wrapper" class="dataTables_wrapper no-footer">

                                <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table dataTable no-footer" id="example5" role="grid" aria-describedby="example5_info">

                                    <thead>

                                        <tr role="row">

                                            <th class="sorting_asc" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" style="width: 24.6833px;" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>

                                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" style="width: 175.25px;" aria-label="Position: activate to sort column ascending"> Name</th>

                                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" style="width: 50.9167px;" aria-label="Type: activate to sort column ascending">Mobile No.</th>

                                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" style="width: 90.4833px;" aria-label="Posted Date: activate to sort column ascending">City</th>

                                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" style="width: 137.717px;" aria-label="Last Date To Apply: activate to sort column ascending"> State</th>

                                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" style="width: 80.6167px;" aria-label="Close Date: activate to sort column ascending">Address</th>

                                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" style="width: 62.8667px;" aria-label="Status: activate to sort column ascending">Status</th>

                                            <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" style="width: 155.867px;" aria-label="Actions: activate to sort column ascending">Actions</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                    <?php $counter=1; foreach($candidates as $candidate): ?>

                                        <tr role="row" class="odd">

                                            <td class="sorting_1"><?=$counter?></td>

                                            <td><?=$candidate['name']?></td>

                                            <td class="wspace-no"><?=$candidate['phone']?></td>

                                            <td><?=$candidate['city']?></td>

                                            <td><?=$candidate['state']?></td>

                                            <td><?=substr($candidate['address'],0,10)."..."?></td>

                                            <?php if($candidate['status']!=null){ ?>

                                                <td><span class="badge badge-success badge-lg light">Found</span></td> <?php }else{?>

                                                    <td><span class="badge badge-warning badge-lg light">Missing</span></td>

                                                <?php }?>

                                            <td>

                                                <div class="action-buttons d-flex justify-content-end">





                                                        <a href="<?=base_url()."detail/".$url.$candidate['id']?>" class="btn btn-success light mr-2">

                                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle></g></svg>

                                                    </a>


                                                    <!-- <a href="<?=base_url().$url."delete".$candidate['id']?>" class="btn btn-secondary light mr-2">

                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">

														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

															<rect x="0" y="0" width="24" height="24"></rect>

															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>

															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>

														</g>

													</svg>

                                                    </a> -->

                                                    <a href="<?=base_url().$url."delete/".$candidate['id']?>" class="btn btn-danger light">

                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">

														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

															<rect x="0" y="0" width="24" height="24"></rect>

															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>

															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>

														</g>

													</svg>

                                                    </a>

                                                </div>

                                            </td>

                                        </tr>

                                        <?php $counter ++ ; endforeach ?>

                                        



                                    </tbody>

                                </table>



                            </div>

                        </div>

                    </div>

                </div>

            </div>





        </div>



        <?= view('admin/includes/footer') ?> 