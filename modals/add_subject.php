<!-- modal 3 grade-->
<div class="modal fade" id="create_subject">
    <div class="modal-dialog modal-lg">
        <div class="modal-content card-outline card-info">
            <div class="modal-header">
                <h4 class="modal-title" id="font">បញ្ចូលព័ត៌មានកម្រិតសិក្សា</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="../action/create_subject.php">
                <div class="modal-body" id="font">
                    <div class="form-group" id="font">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">០១-មុខវិជ្ជា*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" name="subject_kh" class="form-control" required placeholder="បញ្ចូលមុខវិជ្ជា">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">បោះបង់</button>
                    <button type="submit" name="create_subject" class="btn btn-primary">រក្សាទុក</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.end modal 3 grade -->