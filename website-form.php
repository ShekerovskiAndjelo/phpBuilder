<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-image: url(./BgcStock/1.jpg);
            background-size: cover;
        }
    </style>
</head>

<body>

    <form action="submit-form.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center mb-5">
                    <h1>Website Form</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-3 bg-secondary offset-1 rounded-4">

                    <label for="cover-image" class="form-label">Cover Image:</label>
                    <input type="file" name="cover-image" id="cover-image" class="form-control"><br>

                    <label for="page-title" class="form-label">Page Title:</label>
                    <input type="text" name="page-title" id="page-title" class="form-control"><br>

                    <label for="page-subtitle" class="form-label">Page Subtitle:</label>
                    <input type="text" name="page-subtitle" id="page-subtitle" class="form-control"><br>

                    <label for="company-description" class="form-label">Company Description:</label>
                    <textarea name="company-description" id="company-description" rows="4" cols="35" class="form-control"></textarea><br>
                    <label for="telephone-number" class="form-label">Telephone Number:</label>
                    <input type="text" name="telephone-number" id="telephone-number" class="form-control"><br>
                    <label for="location" class="form-label">Location:</label>
                    <input type="text" name="location" id="location" class="form-control"><br>
                    <label for="category" class="form-label">Category:</label>
                    <select name="category" id="category" class="form-control">
                        <option value="services">Services</option>
                        <option value="products">Products</option>
                    </select><br>
                </div>

                <div class="col-3 bg-secondary offset-1 rounded-4">

                    <label for="product1-url" class="form-label">Product/Service 1 URL:</label>
                    <input type="file" name="product1-url" id="product1-url" class="form-control">
                    
                    <label for="product1-description" class="form-label">Product/Service 1 Description:</label>
                    <input type="text" name="product1-description" id="product1-description" class="form-control"><br>
                    
                    <label for="product2-url" class="form-label">Product/Service 2 URL:</label>
                    <input type="file" name="product2-url" id="product2-url" class="form-control"><br>

                    <label for="product2-description" class="form-label">Product/Service 2 Description:</label>
                    <input type="text" name="product2-description" id="product2-description" class="form-control"><br>

                    <label for="product3-url" class="form-label">Product/Service 3 URL:</label>
                    <input type="file" name="product3-url" id="product3-url" class="form-control"><br>

                    <label for="product3-description" class="form-label">Product/Service 3 Description:</label>
                    <input type="text" name="product3-description" id="product3-description" class="form-control"><br>
                </div>

                <div class="col-3 bg-secondary offset-1 rounded-4">

                    <label for="contact-description" class="form-label">Contact Description:</label>
                    <textarea name="contact-description" id="contact-description" rows="4" cols="35" class="form-control"></textarea><br>

                    <label for="linkedin-url" class="form-label">LinkedIn URL:</label>
                    <input type="text" name="linkedin-url" id="linkedin-url" class="form-control"><br>

                    <label for="facebook-url" class="form-label">Facebook URL:</label>
                    <input type="text" name="facebook-url" id="facebook-url" class="form-control"><br>

                    <label for="twitter-url" class="form-label">Twitter URL:</label>
                    <input type="text" name="twitter-url" id="twitter-url" class="form-control"><br>

                    <label for="instagram-url" class="form-label">Instagram URL:</label>
                    <input type="text" name="instagram-url" id="instagram-url" class="form-control"><br>


                </div>

                <div class="row mt-2">
                    <div class="col d-flex justify-content-center">

                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </div>
            </div>
    </form>
</body>

</html>