<div id="dclose">
    <div class="d-flex justify-content-center align-items-center dback">
        <div class="dmsg">
            <div id="did" class="d-none">{{$id}}</div>
            <div class="dimsg text-center mt-3">
                آپ واقعی عنوان کو ختم کرنا چاہتے ہیں؟
            </div> <br>
            <div class="d-flex justify-content-center">
                <button  class="jinahi btn btn-success mx-2">جی نہیں</button>
                <!-- <button id="delete" class="btn btn-danger mx-2">جی ہاں</button> -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mx-2" data-toggle="modal" data-target="#exampleModal">
                    جی ہاں
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="color:black;direction:rtl;">
                            <div class="modal-header d-flex justify-content-between">
                                <h5 class="modal-title" id="exampleModalLabel">برائے مہربانی ڈیلیٹ کرنے کی وجہ تحریر کریں۔</h5>
                                <button type="button" style="margin:unset;" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body d-flex justify-content-center">
                                <textarea name="" id="" cols="50" rows="10"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button  type="button" class="jinahi btn btn-secondary" data-dismiss="modal">بند کریں</button>
                                <button  type="button" class="jinahi btn btn-primary">محفوظ کریں</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/treeviewPart.js"></script>