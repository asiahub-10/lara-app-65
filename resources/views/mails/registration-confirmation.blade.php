<h2>Welcome {{$reg_user->first_name}}! You are registered.</h2>
<p>Your account details is as follows:</p>
<ul>
    <li><b>Name:</b> {{ $reg_user->first_name }} {{ $reg_user->last_name }}</li>
    <li><b>Role:</b> {{ $reg_user->role }}</li>
</ul>
<p>If you have any questions, please don't hesitate to contact us.</p>
<br>
<p>Thanks</p>