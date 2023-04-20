<!-- head section starts here -->
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<div class="form-horizontal">

    <!-- Form Name -->
    <h3 class="text-center">ADD PRODUCTS</h3>


    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
        <div class="col-md-4">
            <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">

        </div>
    </div>


    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
        <div class="col-md-4">
            <input id="product_categorie" name="product_categorie" class="form-control" required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>
        <div class="col-md-4">
            <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">

        </div>
    </div>


    <!-- Textarea -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
        <div class="col-md-4">
            <textarea class="form-control" id="product_description" name="product_description" required=""></textarea>
        </div>
    </div>


    <!-- Textarea -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="product_price">PRODUCT PRICE</label>
        <div class="col-md-4">
            <input type="number" class="form-control" id="product_price" name="product_price" required=""></input>
        </div>
    </div>

    <!-- File Button -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="filebutton">PRODUCT IMAGE</label>
        <div class="col-md-4">
            <input id="filebutton" name="filebutton" type="url">
        </div>
    </div>


    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="singlebutton"></label>
        <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary" onclick="addProduct()">ADD PRODUCT</button>
        </div>
    </div>

</div>
<script src="newScript.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>