@props(['type', 'message'])

@if(session()->has($type))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition
        class="alert-container">

        <div class="alert {{ $type == 'success' ? 'success' : 'error' }}">
            <i class="{{ $type == 'success' ? 'fa-solid fa-circle-check' : 'fa-solid fa-circle-exclamation' }}"></i>
            <span>{{ session($type) }}</span>
        </div>

    </div>
@endif

<style>
   
    .alert-container {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        pointer-events: none;
    }

    .alert {
        pointer-events: auto;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 20px;
        margin-bottom: 10px;
        color: white;
        border-radius: 8px;
        font-size: 14px;
        font-family: Arial, sans-serif;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        min-width: 280px;
    }

    .success {
        background-color: #10b981;
    }

    .error {
        background-color: #ef4444;
    }

    .info {
        background-color: #3b82f6;
    }
</style>