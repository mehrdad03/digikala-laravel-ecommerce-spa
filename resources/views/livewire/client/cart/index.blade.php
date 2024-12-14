<div>
    @push('link')
        <link rel="stylesheet" href="/client/assets-v2/css/cart.css"/>
    @endpush
    <section class="d-flex cart-container">
        <!-- cart-right -->
        @include('livewire.client.cart.item')
        <!-- cart-left -->
        @include('livewire.client.cart.invoice')
    </section>
</div>
