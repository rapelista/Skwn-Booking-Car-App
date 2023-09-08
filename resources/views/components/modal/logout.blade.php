 <!-- Logout Modal-->
 <div
     aria-hidden="true"
     aria-labelledby="exampleModalLabel"
     class="modal fade"
     id="logoutModal"
     role="dialog"
     tabindex="-1"
 >
     <div
         class="modal-dialog"
         role="document"
     >
         <div class="modal-content">
             <div class="modal-header">
                 <h5
                     class="modal-title"
                     id="exampleModalLabel"
                 >Ready to Leave?</h5>
                 <button
                     aria-label="Close"
                     class="close"
                     data-dismiss="modal"
                     type="button"
                 >
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
             <div class="modal-footer">
                 <button
                     class="btn btn-secondary"
                     data-dismiss="modal"
                     type="button"
                 >Cancel</button>
                 <a
                     class="btn btn-primary"
                     href="{{ route('logout') }}"
                 >Logout</a>
             </div>
         </div>
     </div>
 </div>
