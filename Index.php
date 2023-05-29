Software Development

ArticlesFree Practice TestsOn-demand WebinarsTutorials

HomeResourcesSoftware DevelopmentImage Upload in PHP: A Step-by-Step Explanation

Image Upload in PHP: A Step-by-Step Explanation

By Ravikiran A S

Last updated on Feb 17, 2023107558

Interpreting Image Upload in PHP

Table of Contents

Program to Achieve the TaskProgram ExplanationPHP Methods Used in the ProgramFinal Code Combining the PHP, CSS, and HTMLSteps to Exceed the Size of Image UploadView More

PHP is widely used in developing server-side applications. On a dynamic website, uploading files to keep it updated is a routine. And PHP efficiently handles this process. You can use PHP to handle the uploading of multiple files to the server and display them on a dynamic website. 

PHP is used with almost all popular database software. MySQL is one of the most popular databases used in PHP applications. There are many other databases such as PostgreSQL, SYBASE, Oracle Database, and so on that can easily connect with your PHP applications. 

An image can be uploaded and displayed on your PHP website in multiple ways. The most common method of achieving this is by uploading the image into the server’s directory and updating its name in the database. This method is efficient because in this case, the image won’t take any space inside the database, and this will also make your webpage load faster. Another way is by inserting the image into the database directly, instead of uploading it into the server. This method is not recommended because the images take up a lot of space in the database, thereby increasing its size. This will also slow down the loading of your web pages. 

Basics to Advanced - Learn It All!

Caltech PGP Full Stack DevelopmentEXPLORE PROGRAM

In this article, you will look into an efficient method to achieve image upload in PHP, by uploading the image file into a server directory and simply inserting the file name in a database. The file name is used to retrieve the desired file later on, and display it on your website. You will use a MySQL database to demonstrate image upload in PHP.

The following steps need to be followed to upload an image and display it on a website using PHP:

Create a form using HTML for uploading the image files.

Connect with the database to insert the image file.

Program to Achieve the Task

Step 1: Create a Form Using HTML for Uploading the Image Files.

The following HTML code will create a simple form on your website, with a “choose file” option and a button to upload the chosen file.

<!DOCTYPE html>

<html>

<head>

    <title>Image Upload in PHP</title>

    <! link the css file to style the form >

    <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>

    <div id="wrapper">

        <! specify the encoding type of the form using the 

                enctype attribute >

        <form method="POST" action="" enctype="multipart/form-data">        

            <input type="file" name="choosefile" value="" />

            <div>

                <button type="submit" name="uploadfile">

                UPLOAD

                </button>

            </div>

        </form>

    </div>

</body>

</html>

The following CSS code is for giving a basic styling to the HTML form.

#wrapper{

    width: 50%;

    margin: 20px auto;

    border: 2px solid #dad7d7;

}

form{

    width: 50%;

    margin: 20px auto;

}

form div{

    margin-top: 5px;

}

img{

    float: left;

    margin: 5px;

    width: 280px;

    height: 120px;

}

#img_div{

    width: 70%;

    padding: 5px;

    margin: 15px auto;

    border: 1px solid #dad7d7;

}

#img_div:after{

    content: "";

    display: block;

    clear: both;

}
