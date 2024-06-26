@component('mail::message')
Dear Recipient,

I am writing to provide you with our company profile, which includes detailed information about ARDHO's history, mission, services, achievements, and our team.

Our company profile is attached to this email for your review. Please feel free to reach out if you have any questions or would like further information about our offerings.


Best regards,

@component('mail::button', ['url' => 'assets/img/logo.png'])
Download
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
