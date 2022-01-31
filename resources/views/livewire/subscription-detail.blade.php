<div wire:init="loadSubscriptionDetails">
    @if($subscription)
        {{ $subscription  }}
    @else
        loading...
    @endif
</div>
