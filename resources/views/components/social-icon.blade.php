@props(['name'])

<svg
    {{ $attributes->merge([
        'viewBox' => '0 0 24 24',
        'fill' => 'none',
        'aria-hidden' => 'true',
        'focusable' => 'false',
    ]) }}
>
    @if ($name === 'email')
        <path d="M3.5 5.5h17v13h-17z" stroke="currentColor" stroke-width="1.5" />
        <path d="m4 6 8 7 8-7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
    @elseif ($name === 'whatsapp')
        <path d="M20 11.7a8.1 8.1 0 0 1-11.9 7.1L4 20l1.2-4A8.1 8.1 0 1 1 20 11.7Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
        <path d="M9 8.5c.3-.5.6-.5.9-.5h.4c.2 0 .4.1.5.4l.7 1.7c.1.2 0 .4-.1.6l-.6.7c-.2.2-.2.4-.1.6.5 1 1.4 1.8 2.4 2.3.2.1.4.1.6-.1l.8-.9c.2-.2.4-.2.6-.1l1.6.8c.3.1.4.3.4.5 0 .4-.2 1.1-.6 1.4-.5.5-1.2.7-1.9.6-1.2-.2-2.7-.9-4.1-2.2-1.2-1.1-2-2.5-2.2-3.6-.2-.9.1-1.7.7-2.2Z" fill="currentColor" />
    @elseif ($name === 'linkedin')
        <path d="M5 9v10M5 5.5v.1M10 19v-5.3c0-2.7 4.5-3 4.5.1V19M10 9v10M3.5 3.5h17v17h-17z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" />
    @endif
</svg>
