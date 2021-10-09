<div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit.prevent="sendInquiry">
     @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
            <div class="fld-input">
                 
               <input type="text" wire:model="name" placeholder="Name" required="required">
            </div>
            @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            <div class="fld-input">
           
               <input type="email" wire:model="email" placeholder="Email Address" required="required">
            </div>
                @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
            <div class="fld-input">
          
               <input type="tel" wire:model="phone" placeholder="Phone Number" required="required">
          <input type="hidden" wire:model="source"  value="{{request()->route()->getName()}}">
            </div>
            @error('message') <span class="error text-danger">{{ $message }}</span> @enderror
            <div class="fld-input textarea">
            
               <textarea placeholder="Message..." wire:model="message"></textarea>
            </div>
            <div class="fld-btn">
               <button type="submit">Get Started Now  <i class="far fa-long-arrow-right"></i></button>
            </div>
         </form>
</div>
