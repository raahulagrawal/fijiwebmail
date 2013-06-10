<?php
/**
 * Fiji Mail Server 
 *
 * @author    gabe@fijiwebdesign.com
 * @link      http://www.fijiwebdesign.com/
 * @copyright Copyright (c) 2010-2020 Fiji Web Design. (http://www.fijiwebdesign.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Fiji_Mail
 */

 
namespace app\mail\view\widget;

/**
 * Generate HTML to display an Zend\Mail\AddressList list of emails
 */
class composeForm
{
    protected $addressList; 
    
    public function __construct($to = '', $subject = '', $inReplyTo = '', $cc = '', $bcc = '')
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->inReplyTo = $inReplyTo;
        $this->bcc = $bcc; 
        $this->cc = $cc;
    }
    
    public function toHtml()
    {
        
        ob_start();
        ?>
        
<form id="compose-email">
    <fieldset>
        <div class="control-group">
            <div class="compose-headers">
                <div class="controls control-to">
                    <label for="to" class="control-label">To</label>
                    <input name="to" class="input-xlarge" value="<?php echo $this->to; ?>">
                    <span class="add-bcc-wrap">
                        <a href="#" class="add-cc">Cc</a>
                        <a href="#" class="add-bcc">Bcc</a>
                    </span>
                </div>
                <div class="controls control-cc">
                    <label for="cc" class="control-label">Cc</label>
                    <input name="cc" class="input-xlarge" value="<?php echo $this->cc; ?>">
                </div>
                <div class="controls control-bcc">
                    <label for="bcc" class="control-label">Bcc</label>
                    <input name="bcc" class="input-xlarge" value="<?php echo $this->bcc; ?>">
                </div>
                <div class="controls control-subject">
                    <label for="subject" class="control-label">Subject</label>
                    <input name="subject" class="input-xlarge" value="<?php echo $this->subject; ?>">
                </div>
            </div>
            <div class="controls">
                <textarea id="reply-body" name="body" class="wysihtml5" placeholder="Compose email&hellip;" rows="8"></textarea>
            </div>
        </div>
        <div class="form-actions">
            <button class="btn btn-alt btn-primary" type="submit">Send Email</button>
        </div>
    </fieldset>
    <input type="hidden" name="In-Reply-To" value="<?php echo htmlentities($this->inReplyTo); ?>">
    <input type="hidden" name="app" value="mail">
    <input type="hidden" name="page" value="compose">
    <input type="hidden" name="func" value="send">
</form>

<!-- Wysihtml5 -->
<script src="templates/chromatron/js/plugins/wysihtml5/wysihtml5-0.3.0.js"></script>
<script src="templates/chromatron/js/plugins/wysihtml5/bootstrap-wysihtml5.js"></script>

<script>
    $(document).ready(function() {
        
        $('.wysihtml5').wysihtml5();
        
        $('.add-cc').bind('click', function(event) {
            $(this).hide();
            $('.control-cc').show();
            event.preventDefault();
        });
        
        $('.add-bcc').bind('click', function(event) {
            $(this).hide();
            $('.control-bcc').show();
            event.preventDefault();
        });
        
    });
</script>

<style>
    
.controls label {
    width: 100px;
}

.controls input {
    width: 60%;
}

.controls label, .controls input {
    display: inline-block;
}

.compose-headers {
    margin-bottom: 10px;
}

.control-cc, .control-bcc {
    display: none;
}

.add-bcc, .add-cc {
    margin-left: 5px;
}

.add-bcc-wrap {
    float: right;
}

</style>


<link rel='stylesheet' type='text/css' href='templates/chromatron/css/plugins/bootstrap-wysihtml5.css'>

    <?php
    
        return ob_get_clean();
    
    }
    
    
}