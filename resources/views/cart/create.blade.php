<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,200" />
    <title>Add new product</title>
</head>
<body>
    <a href="/cart">
        <span class="material-symbols-outlined m-3 fs-1">arrow_back</span>
    </a>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="create-container">
            <h1 class="text-center">
                Add a new product
            </h1>
            <form class="container-fluid px-5 mt-4 w-50 mx-auto" action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-2 px-4">
                    <div class="col-6">
                        <label for="name">Name*</label>
                        <input class="form-control" type="text" name="name" id="name"
                            value="{{ old('name') ?? '' }}" required autocomplete="on" autofocus minlength="3">
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                Product name
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="Item_type">Category*</label>
                            <select class="form-select shadow-sm" name="Item_type" id="Item_type">
                                <option value="" selected>Select</option>
                                <option value="T-shirt" {{ old('Item_type') == 'T-shirt' ? "selected" : "" }}>T-shirt</option>
                                <option value="Blouse" {{ old('Item_type') == 'Blouse' ? "selected" : "" }}>Blouse</option>
                                <option value="Pants" {{ old('Item_type') == 'Pants' ? "selected" : "" }}>Pants</option>
                                <option value="Shoes" {{ old('Item_type') == 'Shoes' ? "selected" : "" }}>Shoes</option>
                                <option value="Jacket" {{ old('Item_type') == 'Jacket' ? "selected" : "" }}>Jacket</option>
                            </select>
                        @error('Item_type')
                            <div class="alert alert-danger mt-2">
                                Category
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 ">
                        <label for="link">Link:*</label>
                        <input class="form-control" type="text" name="link" id="link" value="{{ old('link') ?? '' }}" minlength="10">
                        @error('link')
                            <div class="alert alert-danger mt-2">
                                link
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="Country">Shipped from:</label>
                        <select class="form-select shadow-sm" name="Country" id="Country">
                            <option value="" selected>Select</option>
                            <option value="US" {{ old('Country') == 'US' ? "selected" : "" }}>US</option>
                            <option value="UK" {{ old('Country') == 'UK' ? "selected" : "" }}>UK</option>
                            <option value="CN" {{ old('Country') == 'CN' ? "selected" : "" }}>CN</option>
                        </select>
                        @error('Country')
                            <div class="alert alert-danger mt-2">
                                Country
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="Item_price">Price:*</label>
                        <input class="form-control" type="number" name="Item_price" id="Item_price" value="{{ old('Item_price') ?? '' }}" required
                            min="1">
                        @error('Item_price')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="quantity">Quantity:*</label>
                        <input class="form-control" type="number" name="quantity" id="quantity" value="{{ old('quantity') ?? '' }}" required
                            min="1" max="5">
                        @error('quantity')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="Weight">Weight:</label>
                        <input class="form-control" type="number" name="Weight" id="Weight" value="{{ old('Weight') ?? '' }}"
                            minlength="1" step=".01">
                        @error('Weight')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 text-center mt-3">
                        <button class="btn btn-outline-dark" type="submit">
                            <span class="material-symbols-outlined align-middle px-3">
                                add_shopping_cart
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>