<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Dish Registration Form</title>


  <style>
    /* Custom Styles */
    .form-container {
      max-width: 500px;
      margin: auto;
      padding: 20px;
      background-color: #f7fafc;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .form-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #2d3748;
    }
    .form-input {
      margin-bottom: 20px;
    }
    .form-input label {
      font-size: 16px;
      color: #4a5568;
    }
    .form-input input,
    .form-input select {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #cbd5e0;
    }
    .form-input input[type="file"] {
      padding-top: 15px;
    }
    .form-input input[type="submit"] {
      background-color: #4a90e2;
      color: #ffffff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .form-input input[type="submit"]:hover {
      background-color: #357ed7;
    }
  </style>
  <script>
    function addIngredientField() {
        const ingredientDiv = document.createElement('div');
        ingredientDiv.innerHTML = `
            <input type="text" name="ingredients[]" required>
            <button type="button" onclick="removeIngredientField(this)">Remove</button>
        `;
        document.getElementById('ingredients').appendChild(ingredientDiv);
    }

    function removeIngredientField(button) {
        button.parentElement.remove();
    }
</script>

</head>
<body>
  <div class="form-container">
    <h2 class="form-title">Dish Registration</h2>
    <form action="/dishes/index" method="post" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="form-input">
        <label for="image">Dish Image:</label>
        <input type="file" id="image" name="image" accept="image/*">
        @error('image')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-input">
        <label for="name">Dish Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter dish name">
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-input">
        <label for="price">Price:</label>
        <input type="double" id="price" name="price" placeholder="Enter price">
        @error('price')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-input">
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" placeholder="Enter quantity">
        @error('quantity')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
      <div class="form-input">
        <label for="startTime">Start Time:</label>
        <input type="time" id="startTime" name="startTime">
        @error('startTime')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-input">
        <label for="endTime">End Time:</label>
        <input type="time" id="endTime" name="endTime">
        @error('endTime')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-input">
        <label for="datepicker">Select Date:</label>
        <input type="text" id="datepicker" name="day" placeholder="Select date">
        @error('day')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      <div class="form-group">
        <select name="category_id" class="form-control">
          <option disabled selected>Select a Category</option>
          @foreach($categories as $category)
    <option value="{{ $category->id }}">{{ $category->name }}</option>
@endforeach
<div>
  <label>Ingredients:</label>
  <div id="ingredients">
      <div>
          <input type="text" name="ingredients[]" required>
          <button type="button" onclick="removeIngredientField(this)">Remove</button>
      </div>
  </div>
  <button type="button" onclick="addIngredientField()">Add Ingredient</button>
</div>

        </select>
      </div>
      <div class="form-group">
        @foreach($dishes as $dish)
          <div class="form-group mb-6">
            <h3 class="text-lg font-semibold">{{ $dish->name }}</h3>
            <ul class="list-disc list-inside ml-4">
              @foreach($dish->ingredients as $ingredient)
                <li>{{ $ingredient }}</li>
              @endforeach
            </ul>
          </div>
        @endforeach
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg">Add</button>
    </div>
    </form>
  </div>
</body>
</html>
