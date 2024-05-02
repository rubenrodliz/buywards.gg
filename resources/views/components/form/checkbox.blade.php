<input type="checkbox" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}"
    class="rounded border-primary text-primary shadow-sm focus:ring-primary {{ $additionalClasses }}"
    @if ($checked) checked @endif>
<span class="ms-2 text-sm text-gray-600">{{ $slot }}</span>
