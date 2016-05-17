<!DOCTYPE html>

<!--
    ╭──────────────────────────────────────────╮
    │ ≡ Design & Front-end                     │
    ╞══════════════════════════════════════════╡
    │                                          │
    │ EVAN SUAU                                │
    ├──────────┬───────────────────────────────┤
    │ Email    │ evan.suau@etu.u-pec.fr        │
    ├──────────┼───────────────────────────────┤
    │ Location │ Sucy-en-Brie, FR              │
    ╰──────────┴───────────────────────────────╯

    ╭──────────────────────────────────────────╮
    │ ≡ Back-end                               │
    ╞══════════════════════════════════════════╡
    │                                          │
    │ ALEX BENOIT                              │
    ├──────────┬───────────────────────────────┤
    │ Email    │ ben75.alex@gmail.com          │
    ├──────────┼───────────────────────────────┤
    │ Location │ Paris, FR                     │
    ╰──────────┴───────────────────────────────╯
-->

<html lang="fr">
    <head>

        <!-- META -->
        <meta charset="utf-8" />
        <title>Hôtel Les Ziags | Accueil</title>
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- STYLES -->
        <!-- CSS -->
        <link href="/content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/content/css/account.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico" />
        <!--[if IE]>
            <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <![endif]-->

        <script type="text/javascript" src="/content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="/content/js/modernizr-3.3.1.min.js"></script>
    </head>

    <body>

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Header -->
            <?php include '../view/headerView.php'; ?>

            <!-- Content -->
            <div class="content home">
                <div class="content-overlay">
                    <div class="container container-main tabs">
                        <ul class="tab-links">
                            <li class="active"><a href="#tab1">Profil</a></li>
                            <li><a href="#tab2">Modifier</a></li>
                            <li><a href="#tab3">Sécurité</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab1" class="tab active">
                                <figure class="user-avatar">
                                    <img src="/content/img/illustrations/250731_137645276372310_512347984_n.jpg" alt="" />
                                    <figcaption><?php echo $row['client_firstname']." ".$row['client_lastname']; ?></figcaption>
                                </figure>
                                <div class="tab-container">
                                    <table>
                                        <tr>
                                            <td>Email</td>
                                            <td><?php echo '<a href="mailto:'.$row['client_mail'].'" target="_blank">'.$row['client_mail'].'</a>' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Adresse</td>
                                            <td>
                                                <?php echo $row['client_streetnumber'].", ".htmlspecialchars($row['client_street'], ENT_QUOTES, 'UTF-8', true); ?><br/>
                                                <?php echo $row['client_zipcode']." ".$row['client_city']; ?><br />
                                                <?php echo  $row['client_country']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nationalité</td>
                                            <td>
                                                <?php echo $row['client_country']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Téléphone</td>
                                            <td>
                                                <?php echo $row['client_cellphone']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="button-social button-social-facebook">
                                                    <img src="/content/img/icons/facebook-letter-logo_24px_white.png" alt="login-with-facebook" />
                                                    <p>Connecté avec Facebook</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div id="tab2" class="tab">
                                <div class="tab-container">
                                    <form action="/model/accountModel.php" method="post">
                                        <table>
                                            <tr>
                                                <td>Avatar</td>
                                                <td><div class="user-avatar"><img src="/content/img/illustrations/250731_137645276372310_512347984_n.jpg" alt="" /></div></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="file" name="nom" /></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    <?php echo '<input type="email" id="user-email" name="user_email" value="'.$row['client_mail'].'" placeholder="xyz@example.com" />'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Adresse</td>
                                                <td>
                                                    <label for="user-street-number">N°</label><br />
                                                    <?php echo '<input type="number" value="'.$row['client_streetnumber'].'" id="user-street-number" name="user_street_number" />'; ?><br />
                                                    <label for="user-street-name">Voie</label><br />
                                                    <?php echo '<input type="text" value="'.$row['client_street'].'" id="user-street-name" name="user_street_name" />'; ?><br />
                                                    <label for="user-zip-code">Code Postal</label><br />
                                                    <?php echo '<input type="number" value="'.$row['client_zipcode'].'" id="user-zip-code" name="user_zip_code" />'; ?><br />
                                                    <label for="user-city">Ville</label><br />
                                                    <?php echo '<input type="text" value="'.$row['client_city'].'" id="user-city" name="user_city" />'; ?><br />
                                                    <label for="user-country">Pays</label><br />
                                                    <?php echo '<input type="text" value="'.$row['client_country'].'" id="user-country" name="user_coutry" />' ?><br />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="user-nationality">Nationalité</label></td>
                                                <td>
                                                    <?php echo '<input type="text" value="'.$row['client_country'].'" id="user-nationality" name="user_nationality" />'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="user-cellphone">Téléphone</label>
                                                <td>
                                                    <?php echo '<input type="text" value="'.$row['client_cellphone'].'" id="user-cellphone" name="user_cellphone" />'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <div class="button-social button-social-facebook">
                                                        <img src="/content/img/icons/facebook-letter-logo_24px_white.png" alt="login-with-facebook" />
                                                        <p>Se déconnecter</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><button class="button-submit" name="edit_user">Mettre à jour</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>

                            <div id="tab3" class="tab">
                                <div class="tab-container">
                                    <h1>Changer le mot de passe</h1>
                                    <form>
                                        <table>
                                            <tr>
                                                <td><label for="user-password-old">Ancien mot de passe</label></td>
                                                <td><input type="password" id="user-password-old" name="user_password_old" /></td>
                                            </tr>
                                            <tr>
                                                <td><label for="user-password-new">Nouveau mot de passe</label></td>
                                                <td><input type="password" id="user-password-new" name="user_password_new" /></td>
                                            </tr>
                                            <tr>
                                                <td><label for="user-password-new2">Confirmer nouveau mot de passe</label></td>
                                                <td><input type="password" id="user-password-new2" name="user_password_new2" /></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><button class="button-submit">Changer le mot de passe</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include '../view/footerView.php'; ?>
        </div>

        <script type="text/javascript" src="/content/js/script.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('.tabs .tab-links a').on('click', function(e)  {
                    var currentAttrValue = jQuery(this).attr('href');

                    // Show/Hide Tabs
                    jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

                    // Change/remove current tab to active
                    jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

                    e.preventDefault();
                });
            });
        </script>

    </body>
</html>
