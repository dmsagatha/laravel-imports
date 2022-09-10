{{-- @props(['key' => '', 'dataModel'])
<select name="fields[{{ $key }}]">
  @foreach ($dataModel::FIELD_DATA as $db_field)
    <option value="{{ (\Request::has('header')) ? $db_field : $loop->index }}" @if ($key===$db_field)
      selected @endif>{{ $db_field }}</option>
  @endforeach
</select> --}}
{{-- <select name="fields[{{ $key }}]">
  @foreach (App\Models\Category::FIELD_DATA as $db_field)
    <option value="{{ (\Request::has('header')) ? $db_field : $loop->index }}" @if ($key===$db_field)
      selected @endif>{{ $db_field }}</option>
  @endforeach
</select> --}}

{{-- <select name="fields[{{ $origin }}]">
  {{ $slot }}
</select> --}}
<select
  {{ $attributes->merge(['class' => 'select--control']) }}
>
  {{-- <option selected value="">Seleccionar</option> --}}
  {{ $slot }}
</select>