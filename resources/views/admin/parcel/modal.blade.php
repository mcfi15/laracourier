          <!--Edit Parcel Modal -->
          <div class="modal fade" id="editParcelModal{{ $parcel->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Change Parcel Status</h1>
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