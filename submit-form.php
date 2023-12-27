<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once 'Connection/Connection.php';

    $coverImage = $_FILES['cover-image'];
    $pageTitle = $_POST['page-title'];
    $pageSubtitle = $_POST['page-subtitle'];
    $companyDescription = $_POST['company-description'];
    $telephoneNumber = $_POST['telephone-number'];
    $location = $_POST['location'];
    $category = $_POST['category'];
    $product1Url = $_FILES['product1-url'];
    $product1Description = $_POST['product1-description'];
    $product2Url = $_FILES['product2-url'];
    $product2Description = $_POST['product2-description'];
    $product3Url = $_FILES['product3-url'];
    $product3Description = $_POST['product3-description'];
    $contactDescription = $_POST['contact-description'];
    $linkedinUrl = $_POST['linkedin-url'];
    $facebookUrl = $_POST['facebook-url'];
    $twitterUrl = $_POST['twitter-url'];
    $instagramUrl = $_POST['instagram-url'];

    // ////////////////////////////////////////////////////
    $coverImageName = $coverImage['name'];
    $coverImageTmpName = $coverImage['tmp_name'];
    $coverImageDestination = 'uploads/' . $coverImageName; 
    move_uploaded_file($coverImageTmpName, $coverImageDestination);

    $product1ImageUrl = uploadProductImage($product1Url);

    $product2ImageUrl = uploadProductImage($product2Url);

    $product3ImageUrl = uploadProductImage($product3Url);


    $database = new Database();
    $connection = $database->getConnection();

    $stmt = $connection->prepare("INSERT INTO website_data (cover_image, page_title, page_subtitle, company_description, 
    telephone_number, location, category, product1_url, product1_description, product2_url, product2_description,
    product3_url, product3_description, contact_description, linkedin_url, facebook_url, twitter_url, instagram_url) 
    VALUES (:cover_image, :page_title, :page_subtitle, :company_description, :telephone_number, :location, :category, 
    :product1_url, :product1_description, :product2_url, :product2_description, :product3_url, :product3_description, 
    :contact_description, :linkedin_url, :facebook_url, :twitter_url, :instagram_url)");

    $stmt->bindParam(':cover_image', $coverImageDestination);
    $stmt->bindParam(':page_title', $pageTitle);
    $stmt->bindParam(':page_subtitle', $pageSubtitle);
    $stmt->bindParam(':company_description', $companyDescription);
    $stmt->bindParam(':telephone_number', $telephoneNumber);
    $stmt->bindParam(':location', $location);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':product1_url', $product1ImageUrl);
    $stmt->bindParam(':product1_description', $product1Description);
    $stmt->bindParam(':product2_url', $product2ImageUrl);
    $stmt->bindParam(':product2_description', $product2Description);
    $stmt->bindParam(':product3_url', $product3ImageUrl);
    $stmt->bindParam(':product3_description', $product3Description);
    $stmt->bindParam(':contact_description', $contactDescription);
    $stmt->bindParam(':linkedin_url', $linkedinUrl);
    $stmt->bindParam(':facebook_url', $facebookUrl);
    $stmt->bindParam(':twitter_url', $twitterUrl);
    $stmt->bindParam(':instagram_url', $instagramUrl);
    $stmt->execute();

    $lastInsertedId = $connection->lastInsertId();

    header("Location: new-page.php?id=$lastInsertedId");
    exit;

}

function uploadProductImage($file)
{
    $imageName = $file['name'];
    $imageTmpName = $file['tmp_name'];
    $imageDestination = 'uploads/' . $imageName;
    move_uploaded_file($imageTmpName, $imageDestination);

    return $imageDestination;
}
?>
