<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $survey->title }}</title>
</head>

<body>
    <div class="header">
        <h2>{{ $survey->title }}</h2>
        <div class="header-content">
            <p>{{ $survey->description }}</p>
        </div>

        <form action="submit_survey.php" method="post">
            <input value="{{ $survey->id }}" hidden />
            @foreach ($inputsAndSelect as $inpAndSel)
                @php $randomId = uniqid('input_'); @endphp
                @if ($inpAndSel->key == 'input')
                    <input type="{{ $inpAndSel->type }}" id="{{ $randomId }}" name="{{ $inpAndSel->name }}"
                        placeholder="Enter your {{ $inpAndSel->name }}"
                        {{ $inpAndSel->is_required ? 'required' : '' }}><br><br>
                @elseif ($inpAndSel->key == 'select')
                    <select id="{{ $randomId }}" name="{{ $inpAndSel->name }}"
                        {{ $inpAndSel->is_required ? 'required' : '' }}>
                        <option value="">Select {{ $inpAndSel->name }}</option>
                        @foreach ($inpAndSel->selectOptions as $option)
                            <option value="{{ $option->value }}">{{ ucfirst($option->value) }}</option>
                        @endforeach
                    </select><br><br>
                @endif
            @endforeach



            {{-- @foreach ($inputsAndSelect as $inpAndSel)
                @php $randomId = uniqid('input_'); @endphp
                @if ($inpAndSel->key == 'input')
                    <input type="{{ $inpAndSel->type }}" id="{{ $randomId }}" name="{{ $inpAndSel->name }}"
                        placeholder="Enter your {{ $inpAndSel->name }}"
                        {{ $inpAndSel->is_required ? 'required' : '' }}><br><br>
                @elseif ($inpAndSel->key == 'select')
                    <select id="{{ $randomId }}" name="{{ $inpAndSel->name }}"
                        {{ $inpAndSel->is_required ? 'required' : '' }}>
                        <option value="">Select {{ $inpAndSel->name }}</option>
                        @foreach ($inpAndSel->selectOptions as $option)
                            <option value="{{ $option->value }}">{{ ucfirst($option->value) }}</option>
                        @endforeach
                    </select><br><br>
                @elseif ($inpAndSel->key == 'checkbox')
                    @foreach ($inpAndSel->selectOptions as $option)
                        <input type="checkbox" id="{{ $randomId }}_{{ $option->value }}"
                            name="{{ $inpAndSel->name }}[]" value="{{ $option->value }}"
                            {{ $inpAndSel->is_required ? 'required' : '' }}>
                        <label
                            for="{{ $randomId }}_{{ $option->value }}">{{ ucfirst($option->value) }}</label><br>
                    @endforeach
                    <br>
                @endif
            @endforeach --}}

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
