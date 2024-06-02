<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <style>
        .top-image-container {
            width: 100%;
            overflow: hidden;
        }

        .top-image {
            width: 100%;
            height: auto;
        }

        .blog-post {
            display: block;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .blog-post-thumbnail {
            position: relative;
        }

        .blog-item-tag {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(0,0,0,0.7);
            color: white;
            padding: 5px;
            border-radius: 5px;
        }

        .blog-post-content {
            padding: 10px;
        }

        .single-page-rm {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .single-page-rm:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="top-image-container">
        <img src="http://example.com/images/top-banner.jpg" alt="Top Banner" class="top-image">
    </div>

    <a href="http://example.com/blog/1/An-In-Depth-Look-at-PHP-Programming" class="blog-post" id="blog-post" style="text-decoration:none;">
        <div class="blog-post-thumbnail">
            <div class="blog-post-thumbnail-inner">
                <span class="blog-item-tag">Programming</span>
                <img src="http://example.com/images/php.jpg" alt="">
            </div>
        </div>
        <div class="blog-post-content">
            <span class="blog-post-date">2024-06-01</span>
            <h3>An In-Depth Look at PHP Program...</h3>                        
            <p>This is a detailed blog post about PHP programming and its variou... </p>    
            <button class="single-page-rm" type="button">Read More</button>                        
        </div>
        <div class="entry-icon"></div>
    </a>

    <a href="http://example.com/blog/2/Understanding-Web-Development" class="blog-post" id="blog-post" style="text-decoration:none;">
        <div class="blog-post-thumbnail">
            <div class="blog-post-thumbnail-inner">
                <span class="blog-item-tag">Web Development</span>
                <img src="http://example.com/images/web-dev.jpg" alt="">
            </div>
        </div>
        <div class="blog-post-content">
            <span class="blog-post-date">2024-05-20</span>
            <h3>Understanding Web Development</h3>                        
            <p>Web development is a broad field encompassing everything from HTML... </p>    
            <button class="single-page-rm" type="button">Read More</button>                        
        </div>
        <div class="entry-icon"></div>
    </a>
</body>
</html>
