 {{-- MODAL CEK TO FIX --}}
 <div class="modal fade" id="batalModal" tabindex="-1" role="dialog" aria-labelledby="batalModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-transparent mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">BATALKAN SERVICE</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>     
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form id="batalForm" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                          <div class="col ">
                              <p><b>Barang :</b> <span id="batal-namaBarang"></span></p>
                          </div>
                          <div class="col ">
                              <p><b>Customer :</b> <span id="batal-namaCustomer"></span></p>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="alasanBatal">Alasan Batal :</label>
                          <textarea class="form-control" id="alasanBatal" name="alasanBatal" placeholder=""></textarea>
                        </div>
                    </form>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                  <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-danger" onclick="document.getElementById('batalForm').submit()">Batalkan</button>
                </div>
            </div>
        </div>
    </div>
  </div>
  {{-- END MODAL CEK TO FIX --}}


  <script>
    $(document).on('click', '#batalButton', function(e){
               e.preventDefault();
               var idBarang = $(this).data('id');
                 console.log(idBarang);
                 $('#batalForm').attr('action', '/input-service/' + idBarang + '/batal');
   
               $.ajax({
                   type: "GET",
                   url: "/input-service/"+idBarang +"/detail",
                   success: function (data) {
                    //    $('#idBarang').html("");
                       $('#batal-namaBarang').text(data.barang.namaBarang);
                       $('#batal-namaCustomer').text(data.barang.customer.namaCustomer);                    
                       // Update other modal fields as needed
                   }
               });

           });
   </script>
  