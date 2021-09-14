@if(session()->has('message'))
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"></button>
         {{session()->get('message')}}
         </div>
        @endif
<form action="{{ route('contact.store')}}" method="post">
    @csrf

    <input type="hidden" name="source" value="{{$source}}">
    <div class="input-group">
        <input type="text" class="form-control" id="fullName" placeholder="Full Name" name="name" required="">
        <label for="fullName">Name</label>
    </div>


    <div class="input-group">
        <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number" name="phone" required="">
        <label for="phoneNumber">Phone</label>
    </div>
    <div class="input-group">
        <input type="email" class="form-control" id="emailAddress" placeholder="Email Address" name="email" required="">
        <label for="emailAddress">Email</label>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" id="subject" placeholder="I Would Like  To Discuse" name="subject" required="">
        <label for="subject">Subject</label>
    </div>
    <div class="input-group form-textarea">
        <textarea class="form-control" id="message" placeholder="Message" name="message"></textarea>
        <label for="message">Message</label>
    </div>
    <div class="input-group">
        <button type="submit" class="filled-btn">Send Message <i class="fas fa-arrow-right"></i></button>
    </div>
</form>
