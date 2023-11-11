 {{-- MODAL CEK TO FIX --}}
 <div class="modal fade" id="fixModal" tabindex="-1" role="dialog" aria-labelledby="fixModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-transparent mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">SERVICE BARANG</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>     
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form id="fixForm" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                          <div class="col ">
                              <p><b>Barang :</b> <span id="fix-namaBarang"></span></p>
                          </div>
                          <div class="col ">
                              <p><b>Customer :</b> <span id="fix-namaCustomer"></span></p>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="kerusakan">Kerusakan :</label>
                          <textarea class="form-control" id="kerusakan" name="kerusakan" placeholder=""></textarea>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <label class="form-label" for="estimasiBiaya">Estimasi Biaya :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control" id="estimasiBiaya" name="estimasiBiaya" placeholder="">
                            </div>
                          </div>
                          <div class="col mb-3">
                            <label class="form-label" for="tanggalEstimasi">Estimasi Selesai :</label>
                            <input type="date" class="form-control" id="tanggalEstimasi" name="tanggalEstimasi" placeholder="DD-MM-YYYY">
                          </div>
                      </div>
  
                    </form>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                  <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary" onclick="document.getElementById('fixForm').submit()">Update</button>
                </div>
            </div>
        </div>
    </div>
  </div>
  {{-- END MODAL CEK TO FIX --}}


  <script>
    $(document).on('click', '#fixButton', function(e){
               e.preventDefault();
               var idBarang = $(this).data('id');
                 console.log(idBarang);
                 $('#fixForm').attr('action', '/input-service/' + idBarang + '/fix');
   
               $.ajax({
                   type: "GET",
                   url: "/input-service/"+idBarang +"/detail",
                   success: function (data) {
                      //  $('#idBarang').html("");
                       $('#fix-namaBarang').text(data.barang.namaBarang);
                       $('#fix-namaCustomer').text(data.barang.customer.namaCustomer);                    
                       // Update other modal fields as needed
                   }
               });

           });
   </script>
  