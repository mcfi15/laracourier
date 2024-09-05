        <!--Add Brand Modal -->
        <div wire:ignore.self class="modal fade" id="addBranchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">New Branch</h1>
                  <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form wire:submit.prevent="storeBranch">
                  <div class="modal-body">
                      <div class="mb-3">
                          <label for="">Street/Building</label>
                          <input type="text" wire:model.defer="street" class="form-control">
                          @error('street')
                            <small class="text-danger">{{ $message }}</small>  
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="">City</label>
                          <input type="text" wire:model.defer="city" class="form-control">
                          @error('city')
                            <small class="text-danger">{{ $message }}</small>  
                          @enderror
                      </div>
                      <div class="mb-3">
                        <label for="">State</label>
                        <input type="text" wire:model.defer="state" class="form-control">
                        @error('state')
                          <small class="text-danger">{{ $message }}</small>  
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="">Zip Code/ Postal Code</label>
                        <input type="text" wire:model.defer="zip_code" class="form-control">
                        @error('zip_code')
                          <small class="text-danger">{{ $message }}</small>  
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="">Country</label>
                        <input type="text" wire:model.defer="country" class="form-control">
                        @error('country')
                          <small class="text-danger">{{ $message }}</small>  
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="">Contact</label>
                        <input type="text" wire:model.defer="contact" class="form-control">
                        @error('contact')
                          <small class="text-danger">{{ $message }}</small>  
                        @enderror
                      </div>
  
                      {{-- <div class="mb-3">
                          <label for="">QR Code</label>
                          <input type="file" name="qrcode" class="form-control">
                          @error('qrcode')
                            <small class="text-danger">{{ $message }}</small>  
                          @enderror
                      </div> --}}
                      
                  </div>
                  <div class="modal-footer">
                      <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                  </div>
              </form>
              </div>
          </div>
          </div>


          <!--Edit Brand Modal -->
        <div wire:ignore.self class="modal fade" id="editBranchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Branch</h1>
                  <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form wire:submit.prevent="updateBranch">
                  <div class="modal-body">
                      <div class="mb-3">
                          <label for="">Street/Building</label>
                          <input type="text" wire:model.defer="street" class="form-control">
                          @error('street')
                            <small class="text-danger">{{ $message }}</small>  
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="">City</label>
                          <input type="text" wire:model.defer="city" class="form-control">
                          @error('city')
                            <small class="text-danger">{{ $message }}</small>  
                          @enderror
                      </div>
                      <div class="mb-3">
                        <label for="">State</label>
                        <input type="text" wire:model.defer="state" class="form-control">
                        @error('state')
                          <small class="text-danger">{{ $message }}</small>  
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="">Zip Code/ Postal Code</label>
                        <input type="text" wire:model.defer="zip_code" class="form-control">
                        @error('zip_code')
                          <small class="text-danger">{{ $message }}</small>  
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="">Country</label>
                        <input type="text" wire:model.defer="country" class="form-control">
                        @error('country')
                          <small class="text-danger">{{ $message }}</small>  
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="">Contact</label>
                        <input type="text" wire:model.defer="contact" class="form-control">
                        @error('contact')
                          <small class="text-danger">{{ $message }}</small>  
                        @enderror
                      </div>
  
                      {{-- <div class="mb-3">
                          <label for="">QR Code</label>
                          <input type="file" name="qrcode" class="form-control">
                          @error('qrcode')
                            <small class="text-danger">{{ $message }}</small>  
                          @enderror
                      </div> --}}
                      
                  </div>
                  <div class="modal-footer">
                      <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                  </div>
              </form>
              </div>
          </div>
          </div>
    
    
          <!--Delete Crypto Modal -->
        <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Branch</h1>
                  <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- <div>
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div> --}}
                <div >
                    <form wire:submit.prevent="destroyBranch">
                        <div class="modal-body">
                        <h6>Are you sure you want to delete this data?</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes, Delete</button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>