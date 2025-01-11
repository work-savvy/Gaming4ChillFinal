@if ($team->payment_status === 'pending')
    <p>Your registration is pending payment verification. We will notify you once it's approved.</p>
@elseif ($team->payment_status === 'approved')
    <p>Your registration is approved! You are now registered for the tournament.</p>
@elseif ($team->payment_status === 'rejected')
    <p>Your registration has been rejected. Please contact us for more information.</p>
@endif
