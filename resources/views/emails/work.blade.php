@component('mail::message')
# New Work

@component('mail::panel')
<div style="width:100%; text-align:center; font-size:30px; font-height:bold;">
You have a new message:
</div>

Nume: {{$message['name']}}<br>
Email: {{$message['email']}}<br>
Number: {{$message['number']}}<br>
Company/Idea title: {{$message['company']}}<br>
Service interested in: {{$message['service']}}<br>
Website: {{$message['website']}}<br>
Needs: {{$message['describe']}}<br>
Buget: {{$message['have']}}<br>
Start date: {{$message['time-start']}} <br>
End date: {{$message['time-stop']}} <br>



@endcomponent

Thanks,<br>
Digilr Team.
@endcomponent
