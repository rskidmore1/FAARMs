<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Protected Page</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
			<h2>Keep it secret! Keep it safe!</h2>
            <p>Semiotics twee locavore bitters American Apparel Truffaut, asymmetrical kale chips Godard Neutra. Try-hard four loko PBR&B, DIY irony vegan sartorial. Narwhal church-key seitan chambray. Listicle Portland semiotics, keffiyeh PBR&B ethical lo-fi Austin food truck next level squid. Etsy gluten-free selvage, deep v salvia Kickstarter Austin flexitarian single-origin coffee sustainable retro cred disrupt. Helvetica fanny pack you probably haven't heard of them cronut paleo aesthetic plaid. Vinyl drinking vinegar trust fund stumptown, Truffaut food truck squid pour-over bicycle rights pug quinoa typewriter slow-carb beard.

			Art party pour-over jean shorts crucifix, viral hella Marfa semiotics butcher typewriter bespoke brunch lomo heirloom lumbersexual. Roof party meggings you probably haven't heard of them kitsch fap. Mlkshk narwhal mustache cliche seitan. Tote bag lo-fi Neutra raw denim blog DIY, sartorial slow-carb skateboard Odd Future 3 wolf moon listicle before they sold out. Tilde Helvetica actually, American Apparel Echo Park post-ironic food truck fap wayfarers. Ugh pork belly lomo banh mi, normcore Kickstarter art party dreamcatcher Vice vegan 3 wolf moon gluten-free before they sold out mixtape. Pickled master cleanse ethical beard, quinoa hoodie locavore disrupt.

			Keytar Carles squid irony, yr slow-carb VHS roof party Pitchfork kogi paleo stumptown. Sustainable kale chips Blue Bottle salvia PBR&B jean shorts, mumblecore fixie Carles ugh bicycle rights deep v. Etsy raw denim taxidermy tofu semiotics, normcore brunch chia 90's Odd Future Neutra synth fap Austin lumbersexual. McSweeney's readymade mustache, photo booth keytar Kickstarter shabby chic asymmetrical heirloom Marfa. Marfa pork belly vinyl, pour-over deep v cred sriracha heirloom Bushwick synth fixie. Pitchfork blog cold-pressed sartorial lo-fi, ugh brunch farm-to-table PBR&B Schlitz cred organic slow-carb. Schlitz gastropub shabby chic organic, cred 8-bit butcher taxidermy.

			Freegan Shoreditch deep v mixtape. Viral drinking vinegar twee, wayfarers readymade lumbersexual asymmetrical pour-over swag taxidermy whatever migas ennui slow-carb single-origin coffee. Crucifix kitsch hashtag, Bushwick Brooklyn photo booth yr try-hard artisan Portland butcher slow-carb cronut. American Apparel seitan cliche, aesthetic Thundercats PBR mixtape Echo Park mumblecore Vice. Freegan beard craft beer plaid, cred shabby chic High Life pork belly actually pug Banksy gastropub. Vinyl Williamsburg PBR wayfarers. Seitan roof party skateboard, art party selvage flannel fap fixie four loko.</p>
			<p>Return to <a href="protected_page.php">menu</a></p>        
			<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>