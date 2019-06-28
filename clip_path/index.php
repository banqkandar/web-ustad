<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CLIP PATH</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: black;
        }

        html, body {
            height: 100%;
        }

        .intro {
            width: 100%;
            height: 100%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            background-size: cover;
            background-position: 50% 50%;
            background-image: url(images/cover.jpg);
            background-repeat: no-repeat;
            clip-path: circle(10% at 50% 54%);
        }

        .intro-title {
            font-size: 2.8rem;
            color: white;
            margin: 0;
            font-weight: 700;
            font-family: tahoma;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }

        @media (max-width : 778px) {
            .intro-title {
                font-size: 1.5rem;
            }
        }

        .intro-subtitle {
            font-size: 1.2rem;
            color: white;
            font-family: tahoma;
            margin: 0.2em 0 0;
            font-weight: 400;
        }

        .intro-content {
            width: 100%;
            padding: 6%;
            font-family: tahoma;
            font-size: 1.2em;
            line-height: 1.5;
            font-weight: 300;
            position: relative;
            z-index: 1;
        }

        .intro-overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            pointer-events: none;
        }

        .bio {
            opacity: 0;
            visibility: hidden;
            overflow: hidden;
            color: rgba(255, 255, 255, .65);
        }



    </style>
</head>

<body>
    <div class="intro">
        <div class="intro-content">
            <h1 class="intro-title intro-text">BEATIFUL GIRL</h1>
            <h2 class="intro-subtitle intro-text">BEATIFUL GIRL</h2>

            <div class="bio">
                <div class="bio-content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus fugiat possimus sit voluptate odit adipisci, sapiente temporibus laborum numquam, cum labore accusantium quo quia deleniti? Porro cumque nisi at. Incidunt.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam nam saepe doloremque praesentium debitis repudiandae tempora nulla pariatur suscipit consequatur mollitia odio laboriosam numquam unde similique, quod cum aspernatur exercitationem officiis delectus. Laudantium sapiente quas doloribus corporis a et id adipisci ducimus dolor, ex repellendus veritatis excepturi ut animi temporibus.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ipsum consectetur, consequatur iste, repellendus ab beatae est aliquam excepturi eaque id quod. Dicta impedit quas iusto iste. Nam quidem incidunt repellat iste, rem neque ipsam quae error eveniet mollitia! Iusto.
                    </p>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, a corrupti blanditiis suscipit voluptatibus nihil exercitationem tempore molestiae officia! Perspiciatis architecto asperiores tempore non laborum, aut laboriosam unde perferendis fugiat placeat? Explicabo ipsum cupiditate tenetur quia voluptas! Expedita ullam sed unde, ducimus distinctio nihil voluptatibus porro, qui commodi quos at! Ab, culpa recusandae maxime sequi cum facere, voluptate architecto adipisci quam quo inventore at? Adipisci, modi. Quis accusantium nostrum dignissimos!
                    </p>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, a corrupti blanditiis suscipit voluptatibus nihil exercitationem tempore molestiae officia! Perspiciatis architecto asperiores tempore non laborum, aut laboriosam unde perferendis fugiat placeat? Explicabo ipsum cupiditate tenetur quia voluptas! Expedita ullam sed unde, ducimus distinctio nihil voluptatibus porro, qui commodi quos at! Ab, culpa recusandae maxime sequi cum facere, voluptate architecto adipisci quam quo inventore at? Adipisci, modi. Quis accusantium nostrum dignissimos!
                    </p>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, a corrupti blanditiis suscipit voluptatibus nihil exercitationem tempore molestiae officia! Perspiciatis architecto asperiores tempore non laborum, aut laboriosam unde perferendis fugiat placeat? Explicabo ipsum cupiditate tenetur quia voluptas! Expedita ullam sed unde, ducimus distinctio nihil voluptatibus porro, qui commodi quos at! Ab, culpa recusandae maxime sequi cum facere, voluptate architecto adipisci quam quo inventore at? Adipisci, modi. Quis accusantium nostrum dignissimos!
                    </p>
                </div>
            </div>
        </div>

        <div class="intro-overlay">

        </div>
    </div>



</body>

</html>