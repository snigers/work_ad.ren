<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

<?=$arResult["FORM_HEADER"]?>

    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="feedback_name"><?=$arResult["QUESTIONS"]["NAME"]["CAPTION"]?></label>
                <input class="input-name" type="text" name="form_text_37" id="feedback_name" placeholder=" " required>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="feedback_phone"><?=$arResult["QUESTIONS"]["PHONE"]["CAPTION"]?></label>
                <input class="input-phone" type="text" name="form_text_38" id="feedback_phone" placeholder=" " required>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="feebdback_email"><?=$arResult["QUESTIONS"]["EMAIL"]["CAPTION"]?></label>
                <input type="email" name="form_text_39" id="feebdback_email" placeholder=" " required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="feebdback_message"><?=$arResult["QUESTIONS"]["COMMENT"]["CAPTION"]?></label>
                <textarea name="form_text_40" id="feebdback_message" placeholder=" " rows="5"></textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="form-footer">
                <button class="btn btn-1" type="submit" name="web_form_submit" value="Сохранить"><span>Отправить</span></button>
            </div>
        </div>
    </div>
<?=$arResult["FORM_FOOTER"]?>