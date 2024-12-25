 {{-- @extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Add New Product</h1>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Product Details</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('inventory.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select name="category_id" class="form-control" required>
                                <option value="">Select a Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 --}}


 @extends('layouts.dashboard')

 @section('content')
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <div class="card shadow-lg border-0">
                     <div class="card-header bg-gradient-primary text-white py-4">
                         <div class="d-flex justify-content-between align-items-center">
                             <h2 class="card-title mb-0">
                                 <i class="tim-icons icon-box-2 mr-2"></i>Add New Product
                             </h2>
                             <a href="{{ route('inventory.index') }}" class="btn btn-secondary">
                                 <i class="tim-icons icon-minimal-left mr-1"></i> Back to Inventory
                             </a>
                         </div>
                     </div>

                     <div class="card-body">
                         {{-- <form method="POST" action="{{ route('inventory.store') }}" class="needs-validation" novalidate
                             enctype="multipart/form-data">
                             @csrf

                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="name" class="form-label">
                                             Product Name
                                             <span class="text-danger">*</span>
                                         </label>
                                         <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <span class="input-group-text">
                                                     <i class="tim-icons icon-tag"></i>
                                                 </span>
                                             </div>
                                             <input type="text" id="name" name="name"
                                                 class="form-control @error('name') is-invalid @enderror"
                                                 placeholder="Enter product name" value="{{ old('name') }}" required>
                                             @error('name')
                                                 <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="category_id" class="form-label">
                                             Category
                                             <span class="text-danger">*</span>
                                         </label>
                                         <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <span class="input-group-text">
                                                     <i class="tim-icons icon-folder-simple"></i>
                                                 </span>
                                             </div>
                                             <select id="category_id" name="category_id"
                                                 class="form-control @error('category_id') is-invalid @enderror" required>
                                                 <option value="" disabled selected>Select a Category</option>
                                                 @foreach ($categories as $category)
                                                     <option value="{{ $category->id }}"
                                                         {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                         {{ $category->name }}
                                                     </option>
                                                 @endforeach
                                             </select>
                                             <div class="input-group-append">
                                                 <button class="btn btn-primary" type="button" data-toggle="modal"
                                                     data-target="#addCategoryModal">
                                                     <i class="tim-icons icon-simple-add"></i>
                                                 </button>
                                             </div>
                                             @error('category_id')
                                                 <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <!-- Add Category Modal -->
                             <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title">Add New Category</h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                             </button>
                                         </div>
                                         <form id="categoryForm">
                                             <div class="modal-body">
                                                 @csrf
                                                 <div class="form-group">
                                                     <label for="category_name">Category Name <span
                                                             class="text-danger">*</span></label>
                                                     <input type="text" class="form-control" id="category_name"
                                                         name="name" required placeholder="Enter category name">
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="category_description">Description</label>
                                                     <textarea class="form-control" id="category_description" name="description" placeholder="Optional category description"></textarea>
                                                 </div>
                                             </div>
                                             <div class="modal-footer">
                                                 <button type="button" class="btn btn-secondary"
                                                     data-dismiss="modal">Cancel</button>
                                                 <button type="button" id="saveCategoryBtn" class="btn btn-primary">Save
                                                     Category</button>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label for="description" class="form-label">Description</label>
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="tim-icons icon-notes"></i>
                                         </span>
                                     </div>
                                     <textarea id="description" name="description" class="form-control" rows="4"
                                         placeholder="Enter product description">{{ old('description') }}</textarea>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="price" class="form-label">
                                             Price
                                             <span class="text-danger">*</span>
                                         </label>
                                         <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <span class="input-group-text">$</span>
                                             </div>
                                             <input type="number" id="price" name="price"
                                                 class="form-control @error('price') is-invalid @enderror"
                                                 placeholder="Enter product price" step="0.01" min="0"
                                                 value="{{ old('price') }}" required>
                                             @error('price')
                                                 <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="product_image" class="form-label">Product Image</label>
                                         <div class="custom-file">
                                             <input type="file" class="custom-file-input" id="product_image"
                                                 name="product_image" accept="image/*">
                                             <label class="custom-file-label" for="product_image">
                                                 Choose image
                                             </label>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <div class="custom-control custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="is_active" name="is_active"
                                         checked>
                                     <label class="custom-control-label" for="is_active">
                                         Active Product
                                     </label>
                                 </div>
                             </div>

                             <div class="text-center">
                                 <button type="submit" class="btn btn-primary btn-lg px-5 mt-3">
                                     <i class="tim-icons icon-simple-add mr-2"></i>Add Product
                                 </button>
                             </div>
                         </form> --}}
                         {{-- <form action="{{ route('inventory.store') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <div>
                                 <label for="name">Product Name</label>
                                 <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                                 @error('name')
                                     <span class="error">{{ $message }}</span>
                                 @enderror
                             </div>

                             <div>
                                 <label for="description">Description</label>
                                 <textarea name="description" id="description">{{ old('description') }}</textarea>
                             </div>

                             <div>
                                 <label for="category_name">Category Name</label>
                                 <input type="text" name="category_name" id="category_name"
                                     placeholder="Enter category name" required>
                                 @error('category_name')
                                     <span class="error">{{ $message }}</span>
                                 @enderror
                             </div>

                             <div>
                                 <label for="price">Price</label>
                                 <input type="number" name="price" id="price" step="0.01"
                                     value="{{ old('price') }}" required>
                                 @error('price')
                                     <span class="error">{{ $message }}</span>
                                 @enderror
                             </div>

                             <div>
                                 <label for="product_image">Product Image</label>
                                 <input type="file" name="product_image" id="product_image">
                                 @error('product_image')
                                     <span class="error">{{ $message }}</span>
                                 @enderror
                             </div>

                             <button type="submit">Create Product</button>
                         </form> --}}
                         {{-- <form action="{{ route('inventory.store') }}" method="POST" enctype="multipart/form-data"
                             class="needs-validation" novalidate>
                             @csrf
                             <div class="row g-4">
                                 <div class="col-md-6">
                                     <div class="form-floating mb-3">
                                         <input type="text" class="form-control @error('name') is-invalid @enderror"
                                             id="name" name="name" placeholder="Enter product name"
                                             value="{{ old('name') }}" required>
                                         <label for="name" class="form-label">Product Name</label>
                                         @error('name')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>

                                 <div class="col-md-6">
                                     <div class="form-floating mb-3">
                                         <input type="text"
                                             class="form-control @error('category_name') is-invalid @enderror"
                                             id="category_name" name="category_name" placeholder="Enter category name"
                                             required>
                                         <label for="category_name" class="form-label">Category Name</label>
                                         @error('category_name')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>

                                 <div class="col-md-6">
                                     <div class="form-floating mb-3">
                                         <input type="number" class="form-control @error('price') is-invalid @enderror"
                                             id="price" name="price" placeholder="Enter price" step="0.01"
                                             value="{{ old('price') }}" required>
                                         <label for="price" class="form-label">Price ($)</label>
                                         @error('price')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>

                                 <div class="col-md-6">
                                     <div class="mb-3">
                                         <label for="product_image" class="form-label">Product Image</label>
                                         <div class="input-group">
                                             <input type="file"
                                                 class="form-control @error('product_image') is-invalid @enderror"
                                                 id="product_image" name="product_image" accept="image/*">
                                             @error('product_image')
                                                 <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                         </div>
                                         <div class="form-text text-muted">
                                             Accepted formats: JPG, PNG, GIF (Max 2MB)
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-12">
                                     <div class="form-floating mb-3">
                                         <textarea class="form-control" placeholder="Enter product description" id="description" name="description"
                                             style="height: 150px">{{ old('description') }}</textarea>
                                         <label for="description">Product Description</label>
                                     </div>
                                 </div>

                                 <div class="col-12">
                                     <div class="form-check form-switch mb-3">
                                         <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                             checked>
                                         <label class="form-check-label" for="is_active">
                                             Active Product
                                         </label>
                                     </div>
                                 </div>
                             </div>

                             <div class="d-grid">
                                 <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light">
                                     <i class="bi bi-plus-circle me-2"></i>Create Product
                                 </button>
                             </div>
                         </form> --}}
                         <form action="{{ route('inventory.store') }}" method="POST" enctype="multipart/form-data"
                             class="needs-validation" novalidate>
                             @csrf
                             <div class="row g-4">
                                 <div class="col-md-6">
                                     <div class="form-floating mb-3">
                                         <input type="text" class="form-control @error('name') is-invalid @enderror"
                                             id="name" name="name" placeholder="Enter product name"
                                             value="{{ old('name') }}" required>
                                         <label for="name" class="form-label">Product Name</label>
                                         @error('name')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>

                                 <div class="col-md-6">
                                     <div class="form-floating mb-3">
                                         <input type="text"
                                             class="form-control @error('category_name') is-invalid @enderror"
                                             id="category_name" name="category_name" placeholder="Enter category name"
                                             required>
                                         <label for="category_name" class="form-label">Category Name</label>
                                         @error('category_name')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>

                                 <div class="col-md-4">
                                     <div class="form-floating mb-3">
                                         <input type="number" class="form-control @error('price') is-invalid @enderror"
                                             id="price" name="price" placeholder="Enter price" step="0.01"
                                             value="{{ old('price') }}" required>
                                         <label for="price" class="form-label">Price ($)</label>
                                         @error('price')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>

                                 <div class="col-md-4">
                                     <div class="form-floating mb-3">
                                         <input type="number"
                                             class="form-control @error('stock_quantity') is-invalid @enderror"
                                             id="stock_quantity" name="stock_quantity" placeholder="Enter stock quantity"
                                             value="{{ old('stock_quantity', 0) }}" min="0" required>
                                         <label for="stock_quantity" class="form-label">Stock Quantity</label>
                                         @error('stock_quantity')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>

                                 <div class="col-md-4">
                                     <div class="mb-3">
                                         <label for="product_image" class="form-label">Product Image</label>
                                         <div class="input-group">
                                             <input type="file"
                                                 class="form-control @error('product_image') is-invalid @enderror"
                                                 id="product_image" name="product_image" accept="image/*">
                                             @error('product_image')
                                                 <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                         </div>
                                         <div class="form-text text-white">
                                             Accepted formats: JPG, PNG, GIF (Max 2MB)
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-12">
                                     <div class="form-floating mb-3">
                                         <textarea class="form-control" placeholder="Enter product description" id="description" name="description"
                                             style="height: 150px">{{ old('description') }}</textarea>
                                         <label for="description">Product Description</label>
                                     </div>
                                 </div>

                                 <div class="col-12">
                                     <div class="form-check form-switch mb-3">
                                         <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                             checked>
                                         <label class="form-check-label" for="is_active">
                                             Active Product
                                         </label>
                                     </div>
                                 </div>
                             </div>

                             <div class="d-grid">
                                 <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light">
                                     <i class="bi bi-plus-circle me-2"></i>Create Product
                                 </button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection

 {{-- @section('scripts')
     <script>
         $(document).ready(function() {
             // File input custom label
             $(".custom-file-input").on("change", function() {
                 var fileName = $(this).val().split("\\").pop();
                 $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
             });

             // Product form submission
             $('form').on('submit', function(e) {
                 e.preventDefault();

                 // Create FormData object
                 var formData = new FormData(this);

                 $.ajax({
                     url: "{{ route('inventory.store') }}",
                     method: 'POST',
                     data: formData,
                     processData: false,
                     contentType: false,
                     success: function(response) {
                         // Show success message
                         toastr.success(response.message || 'Product created successfully');

                         // Redirect to inventory index
                         window.location.href = "{{ route('inventory.index') }}";
                     },
                     error: function(xhr) {
                         // Handle validation errors
                         if (xhr.responseJSON && xhr.responseJSON.errors) {
                             var errors = xhr.responseJSON.errors;
                             Object.keys(errors).forEach(function(key) {
                                 toastr.error(errors[key][0]);
                             });
                         } else {
                             // Generic error message
                             toastr.error(
                                 xhr.responseJSON.message ||
                                 'An error occurred while creating the product'
                             );
                         }
                     }
                 });
             });

             // Enable form validation
             (function() {
                 'use strict';
                 window.addEventListener('load', function() {
                     var forms = document.getElementsByClassName('needs-validation');
                     var validation = Array.prototype.filter.call(forms, function(form) {
                         form.addEventListener('submit', function(event) {
                             if (form.checkValidity() === false) {
                                 event.preventDefault();
                                 event.stopPropagation();
                             }
                             form.classList.add('was-validated');
                         }, false);
                     });
                 }, false);
             })();
         });
     </script>
 @endsection --}}
 @section('scripts')
     <script>
         $(document).ready(function() {
             $('form').on('submit', function(e) {
                 e.preventDefault();

                 // Check form validity
                 if (this.checkValidity() === false) {
                     e.preventDefault();
                     e.stopPropagation();
                     $(this).addClass('was-validated');
                     return;
                 }

                 // Create FormData object
                 var formData = new FormData(this);

                 $.ajax({
                     url: "{{ route('inventory.store') }}",
                     method: 'POST',
                     data: formData,
                     processData: false,
                     contentType: false,
                     success: function(response) {
                         // Show success message
                         toastr.success(response.message || 'Product created successfully');

                         // Redirect using window.location
                         if (response.redirect) {
                             window.location.href = response.redirect;
                         }
                     },
                     error: function(xhr) {
                         // Handle validation errors
                         if (xhr.responseJSON && xhr.responseJSON.errors) {
                             var errors = xhr.responseJSON.errors;
                             Object.keys(errors).forEach(function(key) {
                                 toastr.error(errors[key][0]);
                             });
                         } else {
                             // Generic error message
                             toastr.error(
                                 xhr.responseJSON.message ||
                                 'An error occurred while creating the product'
                             );
                         }
                     }
                 });
             });

             // Form validation
             (function() {
                 'use strict';
                 window.addEventListener('load', function() {
                     var forms = document.getElementsByClassName('needs-validation');
                     Array.prototype.filter.call(forms, function(form) {
                         form.addEventListener('submit', function(event) {
                             if (form.checkValidity() === false) {
                                 event.preventDefault();
                                 event.stopPropagation();
                             }
                             form.classList.add('was-validated');
                         }, false);
                     });
                 }, false);
             })();
         });
     </script>
 @endsection
