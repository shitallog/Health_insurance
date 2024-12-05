<!-- resources/views/categories/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Edit Category</h1>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Category Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required>
            </div>
            <div>
                <label for="parent_id">Parent Category:</label>
                <select id="parent_id" name="parent_id">
                    <option value="">None</option>
                    @foreach($categories as $parentCategory)
                        <option value="{{ $parentCategory->id }}" {{ $parentCategory->id == $category->parent_id ? 'selected' : '' }}>
                            {{ $parentCategory->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit">Update Category</button>
            </div>
        </form>
        <a href="{{ route('categories.index') }}">Back to Categories</a>
    </div>
</body>
</html>
