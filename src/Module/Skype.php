<?php

namespace Botlife\Module;

use Ircbot\Type\MessageCommand;

class Skype extends AModule
{
    
    public $events = array(
        'onConnect', 'onPrivMsg'
    );
    
    public function __construct()
    {
        $starRating = new Skype\Dao\StarRating;
        \DataGetter::addCallback(
        	'star-rating', 'star-rating-nocolor',
            array($starRating, 'getRating'), 60
        );
        parent::__construct();
    }
    
    public function onConnect()
    {
        \Ircbot\privMsg('&bitlbee', 'id YayBotLife');
    }
    
    public function onPrivMsg(MessageCommand $event)
    {
        if (stristr($event->message, 'skype - New request: The user')) {
            \Ircbot\privMsg('&bitlbee', 'yes');
        }
    }
    
}