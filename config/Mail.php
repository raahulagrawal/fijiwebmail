<?php
/**
 * Fiji Mail Server 
 *
 * @link      http://www.fijiwebdesign.com/
 * @copyright Copyright (c) 2010-2020 Fiji Web Design. (http://www.fijiwebdesign.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Fiji_Mail
 */

namespace config;

use Fiji\App\Config;

/**
 * Gobal Email Server Configuration
 */
class Mail extends Config
{
    /**
     * Cache IMAP calls
     */
    public $cache_imap = false;
    
    /**
     * IMAP Server settings
     */
    public $authServer = array(
        'host'     => 'localhost',
        'port'     => 143,
        'ssl'      => ''
    );
    
    /**
     * Settings for sending email
     * Options as smtp|sendmail|mail
     */
    public $mailTransport = 'smtp';
    public $mailTransportOptions = array(
        'name'=> 'localhost',
        'host'=> 'localhost',
        'port' => 25,
        'connection_class'  => 'login',
        'connection_config' => array(
            'username' => '',
            'password' => '',
            'ssl' => 'tls'
         ),
    );
    
    
    /**
     * Default Email folders
     * @note Only sub folders of INBOX are creatable on our Postfix/Dovecot setup
     */
    public $folders = array(
        'inbox' => 'INBOX',
        'sent' => 'INBOX.Sent',
        'drafts' => 'INBOX.Drafts',
        'archive' => 'INBOX.Archive',
        'spam' => 'INBOX.Spam',
        'trash' => 'INBOX.Trash'
    );
    
    public $dev = true;
	
	/**
	 * Messages to how per page in mailbox view
	 */
    public $messagesPerPage = 10;
    
    /**
     * Overrides for development hosts
     */
    public function __construct(Array $options = array())
    {
        // dev settings
        if (in_array($_SERVER['HTTP_HOST'], 
            array('fijiwebdesign.com', 'fijisoftware.com', 'h2o.localdomain.hp.com', 'fijicoup.org'))) {
            $this->authServer = array(
                'host'     => 'imap.gmail.com',
                'port'     => 993,
                'ssl'      => 'ssl'
            );
            
            $this->mailTransportOptions = array(
                'name' => 'smtp.gmail.com',
                'host' => 'smtp.gmail.com',
                'port' => 587,
                'connection_class'  => 'login',
                'connection_config' => array(
                    'username' => '',
                    'password' => '',
                    'ssl' => 'tls'
                ),
            );
            
        }
        
        parent::__construct($options);
    }
    
    
    
}



