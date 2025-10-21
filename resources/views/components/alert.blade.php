{{-- @php
    $btn = $btn ?? true;
@endphp --}}
<div class="alert alert-{{ $type ?? 'secondary' }} alert-dismissible fade show" role="alert">
  {{ $slot }}
  @if($btn ?? true)
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  @endif
</div>