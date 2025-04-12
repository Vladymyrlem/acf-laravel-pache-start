@foreach ($fields as $key => $field)
    <label>{{ $field['label'] ?? $key }}</label>
    @if ($field['type'] === 'textarea')
        <textarea name="custom_fields[{{ $key }}]">{{ old("custom_fields.$key", $model->getCustomField($key)) }}</textarea>
    @else
        <input type="{{ $field['type'] ?? 'text' }}" name="custom_fields[{{ $key }}]" value="{{ old("custom_fields.$key", $model->getCustomField($key)) }}">
    @endif
@endforeach