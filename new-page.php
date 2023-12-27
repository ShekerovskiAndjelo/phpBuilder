<?php
require_once 'Connection/Connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $database = new Database();
    $connection = $database->getConnection();

    $stmt = $connection->prepare("SELECT * FROM website_data WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Your page</title>
        <link rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <style>
            .c-bgc {
                background-image: url('<?php echo $row['cover_image']; ?>');
                height: 50vh;
            }
        .navbar-nav .nav-link:hover {
            background-color: #f8f9fa;
            color: #212529;
        }
        </style>
        
    </head>

    <body>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="new-page.php">
                    <?php echo $row['page_title']; ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#section1">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section2">
                                <?php echo $row['category']; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section3">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section4">Socials</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- bgc -->
        <div class="c-bgc">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-center mt-5 mb-c">
                            <h1>
                                <?php echo $row['page_title']; ?>
                            </h1>
                        </div>
                        <div class="d-flex justify-content-center mt-5 mb-c">
                            <h2>
                                <?php echo $row['page_subtitle']; ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section id="section1">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center mt-3">
                    <h3>
                        About us
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <p>
                        <?php echo $row['company_description']; ?>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-6 offset-3">
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center">
                    <p>Tel :
                        <?php echo $row['telephone_number']; ?>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center">
                    <p>Location :
                        <?php echo $row['location']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>


        <section id="section2">
        <!-- services/products -->
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $row['product1_url']; ?>" width="300" height="400" alt="Image 1"
                            class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                <?php echo $row['product1_description']; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $row['product2_url']; ?>" width="300" height="400" alt="Image 2"
                            class="card-img-top">

                        <div class="card-body">
                            <p class="card-text">
                                <?php echo $row['product2_description']; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $row['product3_url']; ?>" width="300" height="400" alt="Image 3"
                            class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                <?php echo $row['product3_description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- line -->
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <hr>
                </div>
            </div>
        </div>
    </section>

        

        <section id="section3">
            <!-- contact -->
            <div class="container">
                <div class="row mt-3 mb-5">
                    <div class="col-6">
                        <h3>Contact</h3>
                        <p>
                            <?php echo $row['contact_description']; ?>
                        </p>
                    </div>
                    <div class="col-6">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input name="contact_name" type="text" class="form-control" id="name"
                                    placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="contact_email" type="text" class="form-control" id="email"
                                    placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label text-dark">Message</label> <br>
                                <textarea name="message" id="message" cols="85" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </section>



        <section id="section4">
            <!-- footer -->
            <div class="bg-dark-subtle">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <p>Made by Andjelo</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center gx-5">
                            <a href="<?php echo $row['linkedin_url']; ?>" class="p-3">Linkedin</a>
                            <a href="<?php echo $row['facebook_url']; ?>" class="p-3">Facebook</a>
                            <a href="<?php echo $row['twitter_url']; ?>" class="p-3">Twitter</a>
                            <a href="<?php echo $row['instagram_url']; ?>" class="p-3">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
    <?php
} else {

    echo "Ne e pronajdeno takvo ID.";
}
?>