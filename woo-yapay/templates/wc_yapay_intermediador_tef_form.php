<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>


<fieldset id="wc-yapay_intermediador-tef-payment-form" class="wc_yapay_intermediador_gateway">
    
    <input type="hidden" id="tctPaymentMethod" name="wc-yapay_intermediador-tef-payment-method" class="required-entry" value="" autocomplete="off">
    <label for="tctPaymentMethod">Selecione a bandeira do seu banco <span class="required">*</span></label>
    <ul>
        <?php
            $imgSrc = "";
            foreach ($payment_methods as $idTcPayment){
                switch (intval($idTcPayment)){
                    case 7: $imgSrc = "itau";break;
                    case 14: $imgSrc = "peela";break;
                    case 21: $imgSrc = "hsbc";break;
                    case 22: $imgSrc = "bradesco";break;
                    case 23: $imgSrc = "bb";break;
                }
        ?>
        <li class="tcPaymentMethod">
            <img src="<?php echo $url_images.$imgSrc; ?>-flag.svg" class="tcPaymentFlag" id="tctPaymentFlag<?php echo $idTcPayment;?>" onclick="selectTefTc('<?php echo $idTcPayment;?>')">
        </li>

        <?php
            }
        ?>


     </ul>

    <div id="cpf_yapayT" class="cpf_yapay cpf_yapay_tef" style="display: none">      
        <label>CPF<strong style="color: red;">*</strong> (somente números)</label>
        <input type="text" class="input-text yapay_cpf" onkeyup="somenteNumeros(this)" type="text" id="yapay_cpfT" name="yapay_cpfT" maxlength="11" required>
    </div>


    <div class="clear"></div>

</fieldset>

