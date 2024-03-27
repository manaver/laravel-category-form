<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Category Form</title>
    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .displayBox {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: 5px;
        }

        .form-label {
            display: block;
        }

        .form-input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 5px 0;
        }

        .btn {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body class="antialiased">
    <form action={{ route('addCategory') }} method="POST" class="displayBox">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-input" id="name" required>
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Category:</label>
            <select class="form-input" name="category_id">
                <option value="">Select Category</option>
                @foreach ($available_categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn">Save</button>
        </div>
    </form>

    <div class="displayBox">
        <h2>Categories</h2>
        @include('components.show-childs', ['categories' => $categories])
    </div>
</body>

</html>
