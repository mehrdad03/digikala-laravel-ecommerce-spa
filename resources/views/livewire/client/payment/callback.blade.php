<div>
    @if(session('paymentSuccess'))

        <div> {{session('paymentSuccess')}}</div>
    @endif
    @if(session('paymentError'))

        <div> {{session('paymentError')}}</div>
    @endif
</div>
