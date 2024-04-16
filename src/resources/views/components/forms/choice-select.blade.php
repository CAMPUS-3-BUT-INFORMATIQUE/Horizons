@props([
    'name',
    'label',
    'class' => '',
    'options' => [],
    'selected' => []
])
<script src="{{ asset('js/choices/scripts/choices.min.js') }}" referrerpolicy="origin"></script>
<link rel="stylesheet" href="{{ asset('js/choices/styles/choices.min.css') }}" />
<label class="my-1 mr-2" for="{{ $name }}">{{ $label }}</label>
<select id="{{ $name }}" name="{{ $name }}[]" multiple="multiple">
    @foreach ($options as $option)
        <option value="{{ $option->id }}" {{ in_array($option->id, $selected) ? 'selected' : '' }}>{{ $option->display_name }}</option>
    @endforeach
</select>
<script>
    var selectEl = document.getElementById('{{ $name }}');
    if(selectEl) {
        const choices = new Choices(selectEl, {
            removeItemButton: true,
            searchEnabled: true,
            itemSelectText: '',
            noResultsText: 'Aucun résultat',
            noChoicesText: 'Aucun choix',
            placeholder: true,
            placeholderValue: 'Choisir une option',
            searchPlaceholderValue: 'Rechercher une option',
            searchFields: ['label', 'value'],
            position: 'auto',
            resetScrollPosition: false,
            shouldSort: false,
            shouldSortItems: false,
        });
    }
</script>