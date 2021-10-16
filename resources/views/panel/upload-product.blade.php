@extends('panel/admin-layouts/master')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h4 class="text-center mt-2">Upload Product</h4>
                <hr>
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="pname">Product Name:</label>
                        <input type="text" class="form-control" name="pname" id="pname" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Description:</label>
                        <textarea class="form-control" rows="5" name="description" id="comment" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="qty">Quantity:</label>
                        <input type="number" class="form-control" name="qty" id="qty" required>
                    </div>
                    <div class="form-group">
                        <label for="displayPrice">Display Price:</label>
                        <input type="number" class="form-control" name="displayPrice" id="displayPrice" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Description:</label>
                        <input type="number" class="form-control" name="sellingPrice" id="sellingPrice" required>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                    <br>
                </form>
            </div>
            <div class="col-md-8">
                <h4 class="text-center mt-2">Review Product</h4>
                <hr>
            </div>
        </div>
    </div>

@endsection
