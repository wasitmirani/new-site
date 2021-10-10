@component('mail::message')
# Introduction

Dear … 
Thanks for contacting eDropShip. We are reviewing your complaint and will contact you shortly. In the meantime, you can read our guidelines and FAQs to get more information. 
Thanks, 
eDropShip Support Team



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
