<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <style>
        /* Basic CSS styles for layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .logo {
            width: 100px;
            /* Adjust the width as needed */
            height: auto;
            /* Maintain aspect ratio */
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
        }

        h1 {
            font-size: 24px;
            margin: 0;
        }

        p {
            font-size: 16px;
            margin: 5px 0 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            resize: vertical;
            /* Allow vertical resizing */
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>{{ $survey->title }}</h2>
        <div class="header-content">
            <p>{{ $survey->description }}</p>
        </div>
    </div>
    <div class="container">
        <h2>Survey Form</h2>

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
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
