<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lookwoood Hotel-GALLERY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="common.css?v=<?php echo time(); ?>">
    <style>
      
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
           
        }
        .container .heading{
        
         padding-bottom: 50px;

        }
        .container .heading h3{
              font-size: 3em;
              font-weight: bolder;
              padding-bottom: 10px;
              border-bottom: 3px solid #222;
        }
        .container .heading h3 span{
            font-weight: 100;
        }
        .container .box{
            display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  grid-gap: 20px;
         
        }
        .container .box .dream{
            height: 0;
  padding-bottom: 100%;
  background-size: cover;
  background-position: center;
        }
        .container .box .dream img{
            width: 100%;
            padding-bottom: 20px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }
        .container .box .dream img:hover{
            transform: scale(1.05);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }
        @media only screen and (max-width: 768px) {
            .container .box{
                flex-direction: column;
            }
            .container .box .dream{
                width: 100%;

            }
        }
        @media only screen and (max-width: 643px){
            .container .heading{
                width: 100%;
            }
            .container .heading h3{
                font-size: 3em;
            }
        }

        
    </style>
</head>
<body>
<div class="background"></div>
<?php require('inc/header.php') ?>
    <div class="container">
        <div class="heading">
            <h3>Photo<span>Gallery</span></h3>
        </div>
        <div class="box">
            <div class="dream">
                <img src="https://images.unsplash.com/photo-1583847268964-b28dc8f51f92?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"/>
                <img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"/>
                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=658&q=80"/>
                </div>
            <div class="dream">
                
                <img src="img/caruosel/2.png"/>
                <img src="img/caruosel/3.png"/>
                <img src="img/caruosel/4.png"/>
                <img src="https://images.unsplash.com/photo-1562663474-6cbb3eaa4d14?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"/>

                
            </div>
            <div class="dream">
                <img src="https://images.unsplash.com/photo-1562663474-6cbb3eaa4d14?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"/>
                <img src="img/caruosel/7.png"/>
                <img src="img/caruosel/4.png"/>
                <img src="img/caruosel/3.png"/>
                <img src="img/caruosel/5.png"/>
                </div>
         
        </div>
    </div>
</body>
</html>