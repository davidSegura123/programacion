<?php
    include("connection.php");
    session_start();
    if(empty($_SESSION["id"])) { // al intentar moverse a homeUser sin iniciar sesion, te redigira a logIn.php ya que la variable de sesion del id del usuario esta vacia justamente porque no se inicio sesion
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/homeUser.css">
        <title>
            Inicio Usuario
        </title>
    </head>
    <body>
        <header class="header-homeUser">
            <div class="header-group-homeUser">
                <a href="homeUser.php" class="link-1-homeUser">
                    <img src="img/logo-1.png" alt="Logo" class="img-homeUser">
                    <div class="title-homeUser">Sistema de ventas</div>
                </a>
            </div>
            <div class="header-group-homeUser">
                <a href="singOff.php" class="link-2-homeUser">Cerrar sesión</a>
            </div>
        </header>

        <aside class="aside-homeUser">
            <div class="title-user-homeUser">
                <img src="img/img-perfil-vacio.jpg" alt="usuario" class="img-2-homeUser">
                <div class="nameUser-homeUser">
                    <?php echo $_SESSION["alias"] ?> <br> <p class="estado">Online</p>
                </div>
            </div>
        </aside>

        <main class="content-homeUser">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fugit necessitatibus culpa quae nisi, doloremque expedita fugiat quia vitae, quam ullam voluptatem velit? Natus quae accusantium adipisci rem aut laudantium vero, nam aspernatur ipsum, possimus fugit nulla incidunt ipsam deleniti dolorum dolore, excepturi harum expedita sapiente. Inventore velit cum ullam voluptate eum explicabo consequatur fugit expedita totam perspiciatis voluptas optio temporibus suscipit eius atque rem obcaecati dignissimos vitae, deserunt dolor, consequuntur minus minima nemo! Iusto ea illum officia laudantium expedita laborum veritatis odio ullam quibusdam eaque alias sit eius nobis nisi voluptas sed modi doloremque beatae, exercitationem neque iste corporis! Sapiente laborum perspiciatis atque nihil, eligendi voluptas suscipit dignissimos ea nisi nesciunt odio architecto omnis tenetur consequatur laudantium voluptates corporis vitae possimus eaque placeat! Et aut eum amet illo aspernatur quasi, officiis voluptate doloribus eveniet itaque nihil in ipsa deserunt atque error nulla quis sequi neque. Provident optio, praesentium dignissimos ratione quaerat rem est molestias molestiae quisquam laudantium. Inventore fuga magni veritatis cumque doloremque a repellendus, illum sed perspiciatis. Suscipit atque distinctio odio hic eos voluptatem est tempora incidunt dolorem nobis exercitationem deserunt, eligendi quas sit esse omnis sint maxime laborum labore? Maxime, vero odio officiis tenetur est asperiores provident quibusdam magnam consectetur tempore tempora expedita non. Possimus ipsum doloremque, dolorum qui illo dolores modi nobis ullam magnam, blanditiis iste ex quo tempora accusamus corporis deleniti praesentium beatae quibusdam molestias veniam, aliquam officia ratione perferendis. Magnam, sunt eius. Et enim fugiat quisquam ab! Quas ab et tempore rerum numquam veritatis delectus tenetur odio architecto illo ullam labore sit error assumenda sint repellendus adipisci, doloribus, officia deserunt explicabo unde. Id, adipisci officiis. Veniam obcaecati aut magni a, voluptas doloribus necessitatibus? Ab dignissimos explicabo voluptate, inventore corporis culpa quaerat consequuntur vel tempore nisi debitis reprehenderit ratione, praesentium minus? Labore pariatur laborum optio ipsam fuga exercitationem aperiam nihil, distinctio ducimus atque ullam voluptatibus aspernatur quod officiis animi suscipit? Voluptatibus officia perferendis tempore laboriosam sed quam cumque mollitia at velit magni aspernatur, facere quod autem explicabo ducimus ipsa repudiandae commodi? Cumque corporis sunt, quidem unde ipsam dolorem fugiat doloribus deleniti quas sed voluptas voluptates molestiae cupiditate porro, blanditiis eveniet. Aut dolores blanditiis, non iure earum asperiores odit nesciunt velit quas porro nemo laboriosam quae eveniet excepturi. Nobis, sed deserunt neque fuga tempore dolore dolor earum placeat et a magni ipsum doloribus iure optio, molestias voluptatem nulla perferendis? Odio mollitia maxime reiciendis, pariatur, facere cupiditate fugit consequuntur ipsa dolorem, quidem quod quo tempore quisquam excepturi ipsum magni quia? Ipsa quod nobis maiores fugit est consequatur dolor consectetur corporis molestiae culpa, tenetur earum aliquid velit eveniet odit eaque totam sint quibusdam dolores ducimus in rerum placeat. Aliquid perspiciatis porro animi dicta nostrum, optio architecto nisi ducimus sequi! Necessitatibus vel maiores rem laborum enim laboriosam deserunt quos deleniti vero, dignissimos numquam rerum veritatis, cumque quia voluptate recusandae quaerat magnam omnis! Veniam repudiandae nam commodi non maiores, fuga laudantium numquam eos dolorum porro, voluptatibus officia praesentium aspernatur eligendi pariatur! Dolor blanditiis nulla aperiam sit harum, sapiente adipisci nihil sed placeat, soluta laborum iusto. Fuga doloremque, magni ipsam beatae vitae ipsa quod nihil nesciunt hic nulla delectus consectetur, officia id, nostrum iste? Iste quam libero eum aut dolores aliquid unde dolor aspernatur, obcaecati quas vero animi, at debitis temporibus architecto, amet excepturi ipsum perferendis inventore fugit commodi cumque facere placeat. Optio qui sequi temporibus ratione minus soluta recusandae ipsam rem saepe. Voluptatibus aperiam distinctio debitis ea unde doloremque! Tempore rerum, corporis sequi aperiam placeat laboriosam quas, perspiciatis nobis amet ex qui dolorum, reprehenderit beatae illum? Ratione ipsam sapiente magnam, quisquam reiciendis suscipit quasi! Quo voluptate, explicabo asperiores, cum, obcaecati reprehenderit esse ipsum nemo necessitatibus rerum aspernatur ea quaerat? Cupiditate placeat eveniet voluptatum fugit culpa repudiandae vero illo, enim consequuntur, facere, tenetur quo ducimus eaque reprehenderit nemo neque esse porro eos totam dolorem qui? Vel aperiam a voluptatibus delectus adipisci, inventore mollitia veritatis nemo qui debitis reprehenderit dignissimos maxime! Velit asperiores doloremque soluta explicabo quisquam quaerat exercitationem quibusdam consectetur consequatur cumque praesentium ullam accusantium dignissimos culpa voluptate at, iste qui earum suscipit nam repudiandae beatae facilis! Iste alias labore et incidunt molestiae, adipisci aliquid excepturi voluptas, perferendis, reiciendis quidem! Dolore, iusto similique nobis eveniet at error repellat id atque velit.
        </main>
    </body>
</html>