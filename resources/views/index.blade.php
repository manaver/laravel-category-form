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

        body {
            background: rgba(220, 240, 245, 0.705);
            color: rgb(3, 8, 29);
        }

        .displayBox {
            width: 50%;
            margin: 0 auto;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 50px;
        }

        @media screen and (max-width: 550px) {
            .displayBox {
                width: 90%;
            }
        }

        .form-group {
            margin-bottom: 5px;
            width: 100%
        }

        .form-label {
            display: block;
            font-weight: bold
        }

        .form-input {
            background-color: white;
            border: none;
            margin: 8px 0;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 8px;
            width: 100%;
            outline: none;

        }

        .btn {
            background: #007bff;
            width: 100%;
            color: white;
            border: 0;
            outline: none;
            border-radius: 0;
            padding: 10px;
            font-size: 1.2rem;
            border-radius: 10px;
            font-weight: $bold;
            text-transform: uppercase;
            letter-spacing: .1em;
            cursor: pointer;
            transition: all.5s ease;

            &:hover,
            &:focus {
                background: #0f95ad;
            }
        }

        .expand-category {
            user-select: none;
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
        <h2 style="margin: 5px;">Categories</h2>
        @include('components.show-childs', ['categories' => $categories])
    </div>
</body>

</html>
