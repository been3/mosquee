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
                                    <figcaption>Alex Benoit</figcaption>
                                </figure>
                                <div class="tab-container">
                                    <table>
                                        <tr>
                                            <td>Email</td>
                                            <td><a href="mailto:ben75.alex@gmail.com" target="_blank">ben75.alex@gmail.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>Adresse</td>
                                            <td>
                                                20, Boulevard Soult<br/>
                                                75012 Paris<br />
                                                France
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nationalité</td>
                                            <td>France</td>
                                        </tr>
                                        <tr>
                                            <td>Téléphone</td>
                                            <td>+33 (0)6 22 71 69 23</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="social-status">
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
                                    <form action="" method="post">
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
                                                <td><input type="email" id="user-email" name="user_email" value="ben75.alex@gmail.com" placeholder="xyz@example.com" /></td>
                                            </tr>
                                            <tr>
                                                <td>Adresse</td>
                                                <td>
                                                    <label for="user-street-number">N°</label><br />
                                                    <input type="number" value="20" id="user-street-number" name="user_street_name" /><br />
                                                    <label for="user-street-name">Voie</label><br />
                                                    <input type="text" value="Boulevard Soult" id="user-street-name" name="user_street_name" /><br />
                                                    <label for="user-zip-code">Code Postal</label><br />
                                                    <input type="number" value="75012" id="user-zip-code" name="user_zip_code" /><br />
                                                    <label for="user-city">Ville</label><br />
                                                    <input type="text" value="Paris" id="user-city" name="user_city" /><br />
                                                    <label for="user-country">Pays</label><br />
                                                    <input type="text" value="France" id="user-country" name="user_coutry" /><br />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="user-nationality">Nationalité</label></td>
                                                <td><input type="text" value="France" id="user-nationality" name="user_nationality" /></td>
                                            </tr>
                                            <tr>
                                                <td>Téléphone</td>
                                                <td>+33 (0)6 22 71 69 23</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <div class="social-status">
                                                        <img src="/content/img/icons/facebook-letter-logo_24px_white.png" alt="login-with-facebook" />
                                                        <p>Se déconnecter</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><button class="button-submit">Mettre à jour</button></td>
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
